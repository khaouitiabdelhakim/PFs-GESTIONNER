<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Admin;
use App\Models\Professor;
use App\Models\Student;
use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Session;


class AuthenticationController extends Controller
{
    protected $username = 'email';
 

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(LoginRequest $request)
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

    public function loginStudent(LoginRequest $request)
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

    public function loginProfessor(LoginRequest $request)
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
        return view('dashboard.admin.src.html.index')->with('admin', $user);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
       
    }

    protected function authenticatedStudent(Request $request, $user) 
    {
        //return view('dashboard.student.src.html.index')->with('student', $user);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
        return view('group.login')->with('student', $user);
       
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

    public function registerAdmin(RegisterRequest $request) 
    {
        $user = Admin::create($request->validated());

        //auth()->login($user);
        return redirect('login');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function registerStudent(RegisterRequest $request) 
    {
        $user = Student::create($request->validated());

        //auth()->login($user);
        return redirect('login');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }

    public function registerProfessor(RegisterRequest $request) 
    {
        $user = Professor::create($request->validated());

        //auth()->login($user);
        return redirect('login');
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
}
