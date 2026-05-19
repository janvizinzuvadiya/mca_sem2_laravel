<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;



Route::controller(orderController::class)->group(function(){

    Route::get('/', 'index' )->name('ord.index');

    Route::get('/reg','create')->name('ord.reg');
    Route::post('/store','store')->name('ord.store');

    Route::get('/edit/{id}','edit')->name('ord.edit');
    Route::post('/update/{id}','update')->name('ord.update');
    
    Route::get('/delete/{id}','destroy')->name('ord.delete');

});