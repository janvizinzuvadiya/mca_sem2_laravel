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
    Route::get('/2',function()
    {
        return view('corona.2');
    });
    Route::get('/3',function()
    {
        return view('corona.3');
    });
    Route::get('/4',function()
    {
        return view('corona.4');
    });
    Route::get('/5',function()
    {
        return view('corona.5');
    });
    Route::get('/6',function()
    {
        return view('corona.6');
    });
    Route::get('/7',function()
    {
        return view('corona.7');
    });


});