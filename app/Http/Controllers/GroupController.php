<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Choice;
use App\Models\Subject;
use App\Models\Project;
use App\Models\Composition;
use App\Models\Student;
use App\Models\Professor;
use App\Models\group;
use App\Models\Task;
use App\Models\Work;

class GroupController extends Controller
{
    public function index(){

        $student = Auth::guard('students')->user();

        $group = Auth::guard('groups')->user();

        $professor = Professor::whereIn('id', function ($query) use ($group)  {
            $query->select('encadrant_id')
                ->from('groups')
                ->where('id', $group->id);
        })->get();

        $subject = Subject::whereIn('id', function ($query) use ($group)  {
            $query->select('subject_id')
                ->from('affectations')
                ->where('group_id', $group->id);
        })->get();

        $project = Project::where('id', $group->project_id)->first();;

        $membres = Student::whereIn('id', function ($query) use ($group)  {
            $query->select('student_id')
                ->from('compositions')
                ->where('group_id', $group->id);
        })->get();
        return view('dashboard.group.src.html.index')->with('group', $group)
        ->with('membres',$membres)->with('professor',$professor)
        ->with('subject',$subject)->with('project',$project);
    
    }



    public function chat(){

        $group = Auth::guard('groups')->user();
        return view('dashboard.group.src.html.chat')->with('group', $group);
    
    }

    public function taches(){

        $group = Auth::guard('groups')->user();

        $tasks = Task::where('state','yet')->where('group_id', $group->id)->get();
        $done_tasks = Task::where('state','done')->where('group_id', $group->id)->get();
      
        
        return view('dashboard.group.src.html.taches')->with('group', $group)
        ->with('tasks', $tasks)->with('done_tasks', $done_tasks);
    
    }

    public function works(){

        $group = Auth::guard('groups')->user();
        $works = Work::where('group_id',$group->id)->get();
        
        return view('dashboard.group.src.html.works')->with('works', $works);
    
    }

    public function devoirs(Task $task){

        $task = Task::find($task->id);
        return view('dashboard.group.src.html.devoirs')->with('task', $task);
    
    }

    public function projet(){

        $group = Auth::guard('groups')->user();
        return view('dashboard.group.src.html.projet')->with('group', $group);
    
    }

    public function removeChoice(Request $request) 
    {
        $subject_id = $request->only('subject_id')['subject_id'];

        $group = Auth::guard('groups')->user();

        Choice::where('subject_id', $subject_id)
            ->where('group_id', $group->id)
            ->delete();

        //auth()->login($user);
        return redirect()->back();
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function makeChoice(Request $request) 
    {
        $subject_id = $request->only('subject_id')['subject_id'];

        $group = Auth::guard('groups')->user();

        $choice = new Choice();

        $choice->subject_id = $subject_id;
        $choice->group_id = $group->id;

        $choice->save();

        //auth()->login($user);
        return redirect()->back();
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function info(){

        $group = Auth::guard('groups')->user();

        $membres = Student::whereIn('id', function ($query) use ($group)  {
            $query->select('student_id')
                ->from('compositions')
                ->where('group_id', $group->id);
        })->get();

        return view('dashboard.group.src.html.info')->with('group', $group)
        ->with('membres', $membres);
    
    }

    public function choix(){

        $group = Auth::guard('groups')->user();

        $subjects = Subject::where('sector', $group->sector)->
        where('level', $group->level)->whereNotIn('id', function ($query) use ($group)  {
            $query->select('subject_id')
                ->from('choices')
                ->where('group_id', $group->id);
        })->get();

        $choices = Subject::where('sector', $group->sector)->
        where('level', $group->level)->whereIn('id', function ($query) use ($group)  {
            $query->select('subject_id')
                ->from('choices')
                ->where('group_id', $group->id);
        })->get();

        return view('dashboard.group.src.html.choix')->with('subjects', $subjects)
        ->with('choices', $choices);
    
    }

    public function subject(Subject $subject){

        return view('dashboard.professor.src.html.uniquesujet')->with('subject', $subject);
    
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
        return redirect('professor/sujet');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

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

    $id = Auth::guard('groups')->user()->id;

    $group = Group::find( $id);
    $group->password = $password;

    $group->save();

    return redirect('group/dashboard');
    }


    // for uploading the works done
    public function uploadWork(Request $request) 
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'task_id' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $group = Auth::guard('groups')->user();

        $work = $request->all();

        $work['group_id'] = $group->id;

        Work::create($work);

        $task = Task::find( $work['task_id']);
        $task->state = 'done';
    
        $task->save();

        //auth()->login($user);
        return redirect('group/taches');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }
    
}
