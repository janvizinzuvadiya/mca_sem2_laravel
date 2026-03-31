<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('student.index');
});

Route::prefix('student')->controller(StudentController::class)->group(function () {
    Route::get('/register', 'register')->name('reg');
    Route::get('/index', 'index')->name('ind');
    Route::post('/store','store')->name('str');

});