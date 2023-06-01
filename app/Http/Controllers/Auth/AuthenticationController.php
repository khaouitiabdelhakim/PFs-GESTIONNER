<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginGroupRequest;
use App\Http\Requests\RegisterGroupRequest;

use App\Models\Group;
use App\Models\Composition;

use App\Models\Subject;

use App\Models\Admin;
use App\Models\Professor;
use App\Models\Student;
use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Session;


class AuthenticationController extends Controller
{

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication successful
            $user = Auth::guard('admins')->user();

            return $this->authenticatedAdmin($request, $user);
           }

             // Authentication failed
            return redirect()->back()->withErrors([
            'msg_for_admin' => 'êtes-vous sûr que vous êtes admin.',
        ]);
    }

    public function loginStudent(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('students')->attempt($credentials)) {
            // Authentication successful
            $user = Auth::guard('students')->user();

            return $this->authenticatedStudent($request, $user);
           }

             // Authentication failed
            return redirect()->back()->withErrors([
                'msg_for_student' => 'Invalid email or password.',
        ]);
    }

    public function loginProfessor(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('professors')->attempt($credentials)) {
            // Authentication successful
            $user = Auth::guard('professors')->user();

            return $this->authenticatedProfessor($request, $user);
           }

             // Authentication failed
            return redirect()->back()->withErrors([
                'msg_for_professor' => 'Invalid email or password.',
        ]);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticatedAdmin(Request $request, $user) 
    {
        $admin = Auth::guard('admins')->user();
        $student_count = Student::count();
        $professor_count = Professor::count();
        $group_count = Group::count();
        return view('dashboard.admin.src.html.index')->with('student_count' , $student_count)->with(
        'professor_count' , $professor_count)->with(
        'group_count' , $group_count);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
       
    }

    protected function authenticatedStudent(Request $request, $user) 
    {
        //return view('dashboard.student.src.html.index')->with('student', $user);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
        //return redirect('student-dashboard')->with('student', $user);
        $student = Auth::guard('students')->user();
        return view('dashboard.student.src.html.profil')->with('student', $student);
       
    }

    protected function authenticatedProfessor(Request $request, $user) 
    {
        return view('dashboard.professor.src.html.index')->with('professor', $user);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
       
    }


    // the registration section

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */

    public function registerAdmin(Request $request) 
    {
        try {
            $this->validate($request, [
                'email' => 'required|email:rfc,dns|unique:admins,email',
                'password' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
        }


        $admin = $request->all();

        $user = Admin::create($admin);

        //auth()->login($user);
        return redirect('/');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function registerStudent(Request $request) 
    {
        try {
            $this->validate($request, [
                'email' => 'required|email:rfc,dns|unique:students,email',
                'password' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
        }


        $student = $request->all();

        $user = Student::create($student);

        //auth()->login($user);
        return redirect()->back()->with('success', 'Compte étudiant créé avec succès');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function registerProfessor(Request $request) 
    {
        try {
            $this->validate($request, [
                'email' => 'required|email:rfc,dns|unique:professors,email',
                'password' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
        }


        $professor = $request->all();

        $user = Professor::create($professor);

        //auth()->login($user);
        return redirect()->back()->with('success', 'Compte professeur créé avec succès');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }



    //Logout section

     /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function logoutStudent()
    {
        Session::flush();
        
        Auth::guard('students')->logout();

        return redirect('/');
    }

    public function logoutProfessor()
    {
        Auth::guard('groups')->logout();

        Session::flush();
        
        Auth::guard('students')->logout();

        return redirect('/');
    }

    public function logoutAdmin()
    {
        Session::flush();
        
        Auth::guard('admins')->logout();

        return redirect('/');
    }


    /**
     * managing the groups ABDELHAKIM KHAOUITI
     */


    public function loginGroup(LoginGroupRequest $request)
    {
        $credentials = $request->only('name', 'password');
        

        if (Auth::guard('groups')->attempt($credentials)) {
            // Authentication successful
            $user = Auth::guard('groups')->user();

            return $this->authenticatedGroup($request, $user);
           }

             // Authentication failed
            return redirect()->back()->withErrors([
            'msg_group_login' => 'invalid credentials.',
        ]);
    }

    protected function authenticatedGroup(Request $request, $user) 
    {
       

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

         //add the user to the

         $student = Auth::guard('students')->user();

         $check_student = Composition::where('student_id',$student->id)->get();
         if ($check_student->count() == 0) {
 
             $composition = new Composition();
             $composition->group_id = $group->id;
             $composition->student_id = $student->id;
             $composition->save();
         }
         
         $group->nb_etudiant = $group->nb_etudiant + 1;
         $group->save();



        $membres = Student::whereIn('id', function ($query) use ($group)  {
            $query->select('student_id')
                ->from('compositions')
                ->where('group_id', $group->id);
        })->get();


    
        return view('dashboard.group.src.html.index')->with('group', $group)
        ->with('membres',$membres)->with('professor',$professor)
        ->with('subject',$subject);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
       
    }

    public function forgotPassword(){
        return view('auth.forgottenpasswd');
    }

    public function registerGroup(Request $request) 
    {
        try {
            $this->validate($request, [
                'name' => 'required|unique:groups,name|min:4',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            ]);
        } catch (ValidationException $e) {
        }


        $group_info = $request->all();

        $student = Auth::guard('students')->user();

        $group_info['sector'] = $student->sector;
        $group_info['level'] = $student->level;
        $group_info['nb_etudiant'] = 1;

        $group = Group::create($group_info);

        $composition = new Composition();
        $composition->group_id = $group->id;
        $composition->student_id = $student->id;
        $composition->save();


        //auth()->login($user);
        return redirect()->back()->with('success', 'Groupe créé avec succès');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function logoutGroup()
    {
        //Session::flush();
        
        Auth::guard('groups')->logout();

        return redirect('student/dashboard');
    }


    public function adminRegisterGroup(Request $request) 
    {
        try {
            $this->validate($request, [
                'name' => 'required|unique:groups,name|min:4',
                'password' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
        }


        $group_info = $request->all();

        $group_info['nb_etudiant'] = 0;

        $group = Group::create($group_info);

        //auth()->login($user);
        return redirect()->back()->with('success', 'Groupe créé avec succès');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

}
