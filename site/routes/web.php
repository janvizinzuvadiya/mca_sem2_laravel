<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('admin')->group(function()
// {
//     Route::get('/home',function()   
//     {
//         return view('home');
//     });

//     Route::get('/about',function()
//     {
//         return view('about');
//     });

//     Route::get('/portfolio',function()
//     {
//         return view('portfolio');
//     });
// });

Route::group(['prefix'=>'ff','name'=>'ad'],function()
{
    Route::get('/home',function()   
    {
        return view('home');
    });

    Route::get('/about',function()
    {
        return view('about');
    });

    Route::get('/portfolio',function()
    {
        return view('portfolio');
    });
});

// Route::get('/contact/{id}/{city?}',function($id,$city="")
// {
//     return view('contact',compact('id','city'));
// })->where([
//     'id'=>'[0-9]+',
//     'city'=>'[A-Za-z]+']);

// Route::get('/about',function()
// {
//     return view('about');
// })->name('hello');





