<?php

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
    return view('welcome');
});
Route::get('/hindi', function () {
    return view('hindi');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/english', function () {
    return view('english');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/kalank', function () {
    return view('kalank');
});
Route::get('/zero', function () {
    return view('zero');
});
Route::get('/notebook', function () {
    return view('notebook');
});
Route::get('/lukachuppi', function () {
    return view('lukachuppi');
});
Route::get('/about', function () {
    return view('about');
});