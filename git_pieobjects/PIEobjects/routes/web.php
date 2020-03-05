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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/courses', function () {
//     return view('courses');
// });
// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/services', function () {
    return view('services');
});
Route::get('/enquiry', function () {
    return view('enquiry');
});

Route::get('/contact', function () {
    return view('contact');
});
// route::get('/contact','contact@index');
// route::post('/con','contact@store')->name('form');
