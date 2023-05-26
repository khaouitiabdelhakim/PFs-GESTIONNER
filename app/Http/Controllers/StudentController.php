<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){

        $student = Auth::guard('students')->user();
        return view('dashboard.student.src.html.index')->with('student', $student);
    
    }
}
