<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);

Route::prefix('Student')->controller(StudentController::class)->group(function () 
{
    Route::get('/index','index')->name('Dashboard');
    Route::get('/user_details','show')->name('allusers');
    Route::get('/add_user','create')->name('register');
    Route::post('/store','store')->name('store');
});

Route::prefix('Mark')->controller(MarksController::class)->group(function()
{
    Route::get('/index','index')->name('Dashboard');
    Route::get('/add_mark','create')->name('add_mark');
    Route::post('/store','store')->name('store');
});