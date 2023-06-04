<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegisterController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PDFController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\ProfessorRegisterController;

use App\Http\Controllers\Auth\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * for the test
 */

Route::get('test', [TestController::class, 'insertData']);

Route::get('/', function () {
    return view('home.home');
});

Route::get('notification', function () {
    return view('dashboard.student.src.html.notification');
});



/**
 * pour qu'on puisse accéder à la partie Group il faut que l'utlisateur soit un étudiant authentifié !!
 */
Route::group(['middleware' => ['student_logged_in']], function() {

    Route::get('student/dashboard', [StudentController::class, 'index']);
    Route::get('student/chat', [StudentController::class, 'chat']);
    Route::get('student/faqs', [StudentController::class, 'faqs']);

    Route::post('group/login', [AuthenticationController::class, 'loginGroup'])->name('group.login');

    Route::post('/group/register', [AuthenticationController::class, 'registerGroup'])->name('group.register');

    Route::post('student/change', [StudentController::class, 'saveChanges'])->name('student.change');

    Route::post('student/chat', [StudentController::class, 'sendMessage'])->name('student.send');

});


// for the Group Controller

Route::group(['middleware' => ['group_logged_in']], function() {

    Route::get('group/dashboard',[GroupController::class, 'index']);

    Route::post('make.choice', [GroupController::class, 'makeChoice'])->name('make.choice');

    Route::post('remove.choice', [GroupController::class, 'removeChoice'])->name('remove.choice');

    Route::get('group/chat',[GroupController::class, 'chat']);

    Route::get('group/choix',[GroupController::class, 'choix']);

    Route::get('group/info',[GroupController::class, 'info']);

    Route::get('group/generate-pdf', [PDFController::class, 'generatePDF']);

    Route::get('group/taches', [GroupController::class, 'taches']);

    Route::get('group/works', [GroupController::class, 'works']);

    Route::get('group/devoir/{task}', [GroupController::class, 'devoirs']);

    Route::get('group/projet', [GroupController::class, 'projet']);

    Route::post('group/change', [GroupController::class, 'saveChanges'])->name('group.change');

    //for works
    Route::post('upload/work', [GroupController::class, 'uploadWork'])->name('upload.work');

});

/**
 * here the admin control
 */

 Route::group(['middleware' => ['admin_logged_in']], function() {

    Route::get('admin/dashboard',[AdminController::class, 'index']);
    
    Route::get('admin/profil',[AdminController::class, 'profil']);

    Route::get('admin/etudiants', [AdminController::class, 'students']);
    Route::get('admin/professors', [AdminController::class, 'professors']);

   
    Route::get('admin/uniqueprof/{professor}', [AdminController::class, 'professor']);

    Route::get('admin/uniquestudent/{student}', [AdminController::class, 'student']);

    Route::get('admin/uniquegrp/{group}', [AdminController::class, 'group']);

    //groupes info addstudent addprof
    Route::get('admin/groupes', [AdminController::class, 'groupes']);
    

    Route::get('admin/info', [AdminController::class, 'profil']);

    Route::get('admin/addprof', [AdminController::class, 'addprof']);
    Route::get('admin/addstudent', [AdminController::class, 'addstudent']);
    Route::get('admin/addgrp', [AdminController::class, 'addgrp']);
   


   
    /**
     * for the LogOut
     */
    Route::get('/admin-logout', [AuthenticationController::class, 'logoutAdmin'])->name('admin-logout');
  

    /** this part is for the authentication of students */


    Route::post('admin/etudiants', [AuthenticationController::class, 'registerStudent'])->name('student.register');

    /** this part is for the authentication of professors */

    Route::post('admin/professors', [AuthenticationController::class, 'registerProfessor'])->name('professor.register');

    Route::post('admin/groupes', [AuthenticationController::class, 'adminRegisterGroup'])->name('grp.register');

    Route::post('etu/change', [AdminController::class, 'saveStudentChanges'])->name('etu.change');

    Route::post('prof/change', [AdminController::class, 'saveProfessorChanges'])->name('prof.change');
    
    Route::post('group/change', [AdminController::class, 'saveGroupChanges'])->name('group.change');
  

});



// end of admin section


Route::group(['middleware' => ['professor_logged_in']], function() {

    Route::get('professor/dashboard',[ProfessorController::class, 'index']);
    

    //projet grille tache notification approveTopic

    Route::get('professor/projet',[ProfessorController::class, 'projet']);
   
    Route::get('professor/grille',[ProfessorController::class, 'grille']);

    Route::get('professor/groupe', [ProfessorController::class, 'groupes']);

    Route::get('professor/tache', [ProfessorController::class, 'tache']);

    Route::get('professor/info',[ProfessorController::class, 'profil']);

    Route::get('professor/chat',[ProfessorController::class, 'chat']);

    Route::get('professor/uniquesujet/{subject}', [ProfessorController::class, 'subject']);

    Route::get('professor/notification',[ProfessorController::class, 'notification']);
    
    Route::get('professor/affecter.sujet', [ProfessorController::class, 'affectTopic']);

    Route::get('professor/affectprojet/{group}', [ProfessorController::class, 'affectProject']);

    Route::get('professor/approuver.sujet', [ProfessorController::class, 'approveTopic']);
    

    /**
     * for handling the most important actions
     */

    Route::post('professor/affecter.sujet', [ProfessorController::class, 'doAffectation'])->name('do.affectation');
    Route::post('professor/sujet', [ProfessorController::class, 'addSubject'])->name('add.subject');
    Route::get('professor/sujet',[ProfessorController::class, 'subjects']);
    

    //for tasks
    Route::post('add/task', [ProfessorController::class, 'addTask'])->name('add.task');

    // to change the password
    Route::post('professor/change', [ProfessorController::class, 'saveChanges'])->name('professor.change');
  

    /**
     * for the LogOut
     */
    Route::get('/professor-logout', [AuthenticationController::class, 'logoutProfessor'])->name('professor-logout');
  

    Route::post('professor/chat', [ProfessorController::class, 'sendMessage'])->name('professor.send');
});





Route::group(['middleware' => ['student_yes_group_no']], function() {

    Route::get('student/group-login', function () {
        return view('group.login');
    });

});

Route::group(['middleware' => ['guest']], function() {


    Route::get('/login', function () {
        return view('auth.login');
    });
    
    /** this part is for the authentication of students */

    Route::post('student/dashboard', [AuthenticationController::class, 'loginStudent'])->name('student.login');


    /** this part is for the authentication of professors */

   
    Route::post('/professor/dashboard', [AuthenticationController::class, 'loginProfessor'])->name('professor.login');


    /** this part is for the authentication of admins */

    Route::post('/admin/register', [AuthenticationController::class, 'registerAdmin'])->name('admin.register');

    Route::post('admin/dashboard', [AuthenticationController::class, 'loginAdmin'])->name('admin.login');

});



 /**
 * Logout Routes
 */
Route::get('/logout', [AuthenticationController::class, 'logoutStudent'])->name('student-logout');

Route::get('/group-logout', [AuthenticationController::class, 'logoutGroup'])->name('group-logout');

Route::get('/forgotpassword', [AuthenticationController::class, 'forgotPassword']);


