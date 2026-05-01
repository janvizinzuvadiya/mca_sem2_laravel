<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::controller(StudentController::class)->group(function()
{
    Route::get('/', 'index')->name('stud.home');

    Route::get('/reg','create')->name('stud.reg');
    Route::post('/store','store')->name('stud.store');

    Route::get('/edit/{id}','edit')->name('stud.edit');
    Route::post('/update/{id}','update')->name('stud.update');

    Route::get('/delete/{id}','destroy')->name('stud.delete');

});
