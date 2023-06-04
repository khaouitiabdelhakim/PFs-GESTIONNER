<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Student;
use App\Models\Admin;
use App\Models\Professor;
use App\Models\Group;

class AdminController extends Controller
{
    public function index(){

        $admin = Auth::guard('admins')->user();
        $student_count = Student::count();
        $professor_count = Professor::count();
        $group_count = Group::count();
        return view('dashboard.admin.src.html.index')->with('student_count' , $student_count)->with(
        'professor_count' , $professor_count)->with(
        'group_count' , $group_count);
    
    }

    //groupes info addstudent addprof

    public function groupes(){
        $groups = Group::all();
        return view('dashboard.admin.src.html.groupe')->with('groups',$groups);
    }

    public function addprof(){
        return view('dashboard.admin.src.html.addprof');
    }

    public function addgrp(){
        $professors = Professor::all();
        return view('dashboard.admin.src.html.addgrp')->with('professors',$professors);
    }

    public function addstudent(){
        return view('dashboard.admin.src.html.addstudent');
    }


    public function profil(){

        $admin = Auth::guard('admins')->user();
        return view('dashboard.admin.src.html.profil')->with('admin',$admin);
    
    }

    public function students(){

        $students = Student::all();
        return view('dashboard.admin.src.html.etu')->with('students',$students);
    
    }

    
    public function professors(){

        $professors = Professor::all();
        return view('dashboard.admin.src.html.prof')->with('professors',$professors);
    
    }

   

    public function professor(Professor $professor){

        return view('dashboard.admin.src.html.uniqueprof')->with('professor', $professor);
    
    }

    public function group(Group $group){

        return view('dashboard.admin.src.html.uniquegrp')->with('group', $group);
    
    }

    public function student(Student $student){

        return view('dashboard.admin.src.html.uniquestudent')->with('student', $student);
    
    }

    public function saveStudentChanges(Request $request)
    {
    try {
        $this->validate($request, [
            'password' => 'required',
            'student_id'  => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $password = $request->only('password')['password'];
    $id = $request->only('student_id')['student_id'];

    $student = Student::find($id);
    $student->password = $password;

    $student->save();

    return redirect()->back()->with('success', 'Compte étudiant modifié avec succès');
    }

    public function saveGroupChanges(Request $request)
    {
    try {
        $this->validate($request, [
            'password' => 'required',
            'group_id'  => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $password = $request->only('password')['password'];
    $id = $request->only('group_id')['group_id'];

    $group = Group::find($id);
    $group->password = $password;

    $group->save();

    return redirect()->back()->with('success', 'Groupe modifié avec succès');
    }


    public function saveProfessorChanges(Request $request)
    {
        
    try {
        $this->validate($request, [
            'password' => 'required',
            'professor_id'  => 'required',
        ]);
    } catch (ValidationException $e) {
        // Handle the validation exception if needed
    }

    $password = $request->only('password')['password'];
    $id = $request->only('professor_id')['professor_id'];

    $professor = Professor::find($id);
    $professor->password = $password;

    $professor->save();

    return redirect()->back()->with('success', 'Compte professeur modifié avec succès');
    }
}
