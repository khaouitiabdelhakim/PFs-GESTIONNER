<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfessorLoginController extends Controller
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


        if (Auth::guard('professors')->attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('professor_dashboard'); // Replace with your desired authenticated student redirect route
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
    protected function authenticated(Request $request, $user) 
    {
        return view('index')->with('user', $user);
        //return redirect()->intended();
    }
}



