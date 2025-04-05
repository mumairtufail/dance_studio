<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('pages.index');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/morris', function () {
    return view('pages.events.morris');
});

Route::get('/events', function () {
    return view('pages.events.events');
});

Route::get('/services', function () {
    return view('pages.services.services');
});

Route::get('/classes', function () {
    return view('pages.services.classes');
});