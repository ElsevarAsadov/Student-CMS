<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){

    Route::prefix('student')->controller(StudentController::class)->group(function(){

        Route::get('show', 'index')->name('student.index');
        Route::get('/', 'index');

        Route::get('create', 'create')->name('student.create');
        Route::post('create', 'store');
    });

    Route::prefix('teacher')->controller(TeacherController::class)->group(function(){
        Route::get('show', 'index')->name('teacher.index');
        Route::get('/', 'index');

        Route::get('create', 'create')->name('teacher.create');
        Route::post('create', 'store')->name('teacher.post');
    });



});


