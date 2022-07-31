<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamController;

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
    return view('home');
});

Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('register', [StudentController::class, 'register'])->name('register');
    Route::post('save', [StudentController::class, 'save'])->name('save');
});

Route::group(['prefix' => 'exams', 'as' => 'exams.'], function () {
    Route::get('get-exam', [ExamController::class, 'getExam'])->name('get-exam');
    Route::post('accept', [ExamController::class, 'acceptExam'])->name('accept');
});


