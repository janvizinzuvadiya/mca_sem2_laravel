<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all',[StudentController::class,'allStudents'])->name('all');

Route::get('/add',[StudentController::class,'addStudents'])->name('add');

Route::post('/student/insert',[StudentController::class,'addmsg'])->name('addmsg');

Route::get('/edit/{id}',[StudentController::class,'updateStudents'])->name('edit');

Route::post('/student/update/{id}',[StudentController::class,'updatemsg'])->name('updatemsg');

Route::get('/delete/{id}',[StudentController::class,'deleteStudents'])->name('delete'); 


Route::prefix('corona')->group(function () 
{
    Route::get('/index',function()
    {
        return view('corona.index');
    });
    Route::get('/1',function()
    {
        return view('corona.1');
    });


});