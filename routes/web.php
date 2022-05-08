<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/services', function () {
    return inertia('Services');
});

Route::get('/portfolio', function () {
    return inertia('Portfolio');
});

Route::get('/clients', function () {
    return inertia('Clients');
});

Route::get('/work', function () {
    return inertia('Work');
});

Route::get('/blog', function () {
    return inertia('Blog');
});

Route::get('/contact', function () {
    return inertia('Contact');
});
