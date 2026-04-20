<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarksController;


Route::get('/', [StudentController::class, 'index']);

Route::prefix('Student')->controller(StudentController::class)->group(function () 
{
    Route::get('/index','index')->name('Dashboard');
    Route::get('/user_details/{id}','show')->name('allusers');

    Route::get('/add_user','create')->name('register');
    Route::post('/store','store')->name('store');

    Route::get('/edit/{id}','edit')->name('Edit');
    Route::post('/update/{id}','update')->name('update');

    Route::get('/delete/{id}','destroy')->name('Delete'); 
});

Route::prefix('Mark')->controller(MarksController::class)->group(function()
{
    Route::get('/index','index')->name('Dashboard');
    Route::get('/mark_details','show')->name('allmarks');

    Route::get('/add_mark','create')->name('add_mark');
    Route::post('/store','store')->name('score_entry');
   
});