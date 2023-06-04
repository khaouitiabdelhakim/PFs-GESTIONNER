<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Student;
use App\Models\ChatLine;

class StudentController extends Controller
{
    public function index(){

        $student = Auth::guard('students')->user();
        return view('dashboard.student.src.html.profil')->with('student', $student);
    
    }
    public function chat(){

        $messages = ChatLine::all();
        $student = Auth::guard('students')->user();
        return view('dashboard.student.src.html.chat')
        ->with('student', $student)->with('messages', $messages);
    
    }

    public function faqs(){

        $student = Auth::guard('students')->user();
        return view('dashboard.student.src.html.faqs')->with('student', $student);
    
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

    $id = Auth::guard('students')->user()->id;

    $student = Student::find( $id);
    $student->password = $password;

    $student->save();

    return redirect('student/dashboard');
    }

    public function sendMessage(Request $request)
    {
    try {
        $this->validate($request, [
            'message' => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $message = $request->only('message')['message'];

    $id = Auth::guard('students')->user()->id;

    $Message = new ChatLine();
    $Message->user_id = $id;
    $Message->message = $message;

    $Message->save();

    return redirect('student/chat');
    }
}
