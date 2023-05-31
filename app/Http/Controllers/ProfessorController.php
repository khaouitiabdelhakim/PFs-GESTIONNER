<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;

use App\Models\Subject;
use App\Models\Student;
use App\Models\Professor;
use App\Models\Group;
use App\Models\Affectation;
use App\Models\Project;
use App\Models\Task;

class ProfessorController extends Controller
{

    //    
    public function index(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.index')->with('professor', $professor);
    
        
    }
    public function chat(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.chat')->with('professor', $professor);
    
    }
    
    public function tache(){

        $professor = Auth::guard('professors')->user();
        $groups = Group::where('encadrant_id',$professor->id)->get();
       
        return view('dashboard.professor.src.html.tache')
        ->with('professor', $professor)
        ->with('groups', $groups);
    
    }
    public function grille(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.grille')->with('professor', $professor);
    
    }
    public function notification(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.notification')->with('professor', $professor);
    
    }
    public function approveTopic(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.approvetopic')->with('professor', $professor);
    
    }

    public function profil(){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.info')->with('professor', $professor);
    
    }

    public function groupes(){

        $professor = Auth::guard('professors')->user();
        $groups = Group::where('encadrant_id',$professor->id)->get();
       
        return view('dashboard.professor.src.html.groupe')
        ->with('professor', $professor)
        ->with('groups', $groups);
    
    }

    // to change the password

    
    public function saveChanges(Request $request)
    {
    try {
        $this->validate($request, [
            'password' => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $password = $request->only('password')['password'];

    $id = Auth::guard('professors')->user()->id;

    $student = Professor::find( $id);
    $student->password = $password;

    $student->save();

    return redirect()->back()->with('success', 'Compte modifié créé avec succès');

    }

    
    public function affectProject(Group $group){

        $subjects = Subject::whereIn('id', function ($query) use ($group)  {
            $query->select('subject_id')
                ->from('choices')
                ->where('group_id', $group->id);
        })->get();

        $professor = Auth::guard('professors')->user();
        $disponible_professors = Professor::all();

        return view('dashboard.professor.src.html.affectprojet')->with('professor', $professor)
        ->with('group', $group)->with('subjects', $subjects)->with('disponible_professors', $disponible_professors);
    
    }

    public function affectTopic(){

        $groups = Group::whereNotIn('id', function ($query){
            $query->select('group_id')
                ->from('affectations');
        })->get();

        $done_groups = Group::whereIn('id', function ($query){
            $query->select('group_id')
                ->from('affectations');
        })->get();


        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.affecttopic')->with('professor', $professor)
        ->with('groups', $groups)->with('done_groups', $done_groups);
    
    }

    public function subjects(){
       

        $professor = Auth::guard('professors')->user();

        $subjects = Subject::orderByDesc('id')->where('professor_id', $professor->id)->get();

        return view('dashboard.professor.src.html.sujet')->with('subjects', $subjects)->with('professor', $professor);
    
    }

    public function subject(Subject $subject){

        $professor = Auth::guard('professors')->user();
        return view('dashboard.professor.src.html.uniquesujet')->with('subject', $subject)->with('professor', $professor);
    
    }



    public function addSubject(Request $request) 
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'level' => 'required',
                'sector' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $professor = Auth::guard('professors')->user();

        $subject = $request->all();

        $subject['professor_id'] = $professor->id;

        $user = Subject::create($subject);

        //auth()->login($user);
        return redirect()->back()->with('success', 'Sujet ajouté avec succès');

        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function addTask(Request $request) 
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'group_id' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $professor = Auth::guard('professors')->user();

        $task = $request->all();

        $task['professor_id'] = $professor->id;

        $task['state'] = 'yet';

        Task::create($task);

        //auth()->login($user);
        return redirect()->back()->with('success', 'Tache ajoutée avec succès');

        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function doAffectation(Request $request)
    {
    try {
        $this->validate($request, [
            'group_id' => 'required',
            'subject_id' => 'required',
            'encadrant_id' => 'required',
            'datesoutenance' => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $all_data = $request->all();

    // Save the affectation
    $affectation = $request->only('group_id', 'subject_id');
    Affectation::create($affectation);

    $project = new Project();
    $project->subject_id = $all_data['subject_id'];
    $project->date_soutenance = $all_data['datesoutenance'];

    $project->save();

    $groupe = Group::find($all_data['group_id']);
    $groupe->project_id = $project->id;
    $groupe->encadrant_id = $all_data['encadrant_id'];

    $groupe->save();

    return redirect('professor/affecter.sujet');
}
    
}
