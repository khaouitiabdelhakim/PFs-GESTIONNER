<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegisterController;

use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('notification', function () {
    return view('dashboard.student.src.html.notification');
});

Route::get('/group', function () {
    return view('group.login');
});

Route::group(['middleware' => ['student_logged_in']], function() {

    Route::get('/student-dashbord',[StudentController::class, 'index'])->name('student-dashbord');
    
    Route::get('projet', function () {
        return view('dashboard.student.src.html.projet');
    });

    Route::get('choix', function () {
        return view('dashboard.student.src.html.choix');
    });

    Route::get('info', function () {
        return view('dashboard.student.src.html.info');
    });

    Route::get('taches', function () {
        return view('dashboard.student.src.html.taches');
    });
    Route::get('devoirs', function () {
        return view('dashboard.student.src.html.devoirs');
    });

});
    




Route::get('/register', function () {
    return view('auth.register');
});

Route::group(['middleware' => ['guest']], function() {

    Route::get('/login', function () {
        return view('auth.login');
    });

    /** this part is for the authentication of students */


    Route::post('/student/register', [StudentRegisterController::class, 'register'])->name('register.perform');

    Route::post('student-dashboard', [AuthenticationController::class, 'loginStudent'])->name('student.login');


    /** this part is for the authentication of professors */

    Route::post('/professor/register', [ProfessorRegisterController::class, 'register'])->name('register.perform');

    Route::post('/professor/login', [AuthenticationController::class, 'loginProfessor'])->name('professor.login');


    /** this part is for the authentication of admins */

    Route::post('/admin/register', [ProfessorRegisterController::class, 'register'])->name('register.perform');

    Route::post('admin.login', [AuthenticationController::class, 'loginAdmin'])->name('admin.login');

});



 /**
 * Logout Routes
 */
Route::get('/logout', [AuthenticationController::class, 'logoutStudent'])->name('student-logout');
