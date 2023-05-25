<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\StudentRegisterController;

use App\Http\Controllers\Auth\ProfessorLoginController;
use App\Http\Controllers\ProfessorRegisterController;

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

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/register', function () {
    return view('auth.register');
});


Route::post('/student/register', [StudentRegisterController::class, 'register'])->name('register.perform');

Route::post('dashboard-student', [StudentLoginController::class, 'login'])->name('student.login');

Route::get('/professor_dashboard', function () {
    return view('dashboard.professor_dashboard');
});



Route::post('/professor/register', [ProfessorRegisterController::class, 'register'])->name('register.perform');

Route::post('/professor/login', [ProfessorLoginController::class, 'login'])->name('professor.login');
