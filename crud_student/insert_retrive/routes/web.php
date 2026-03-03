<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all',[StudentController::class,'allStudents'])->name('all');

Route::get('/add',[StudentController::class,'addStudents'])->name('add');

Route::post('/student/insert',[StudentController::class,'addmsg'])->name('addmsg');