<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;


Route::controller(FacultyController::class)->group(function()
{
    Route::get('/', 'index')->name('fcl.home');
    
    Route::get('/reg','create')->name('fcl.reg');
    Route::post('/store','store')->name('fcl.store');

    Route::get('/edit/{id}','edit')->name('fcl.edit');
    Route::post('/update/{id}','update')->name('fcl.update');

    Route::get('/delete/{id}','destroy')->name('fcl.delete');

});


