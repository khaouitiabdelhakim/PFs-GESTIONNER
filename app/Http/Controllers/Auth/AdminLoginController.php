<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    protected $username = 'email';
 

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication successful
            $user = Auth::guard('admins')->user();

            return $this->authenticated($request, $user);
           }

             // Authentication failed
            return redirect()->back()->withErrors([
            'msg_for_admin' => 'êtes-vous sûr que vous êtes admin.',
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
    protected function authenticated(Request $request, $student) 
    {
        return view('dashboard.student.src.html.index')->with('student', $student);
        //return redirect()->intended(); // Replace with your desired authenticated student redirect route
       
    }
}



