<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth/login');
});
Route::get('/homepage', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('students','\App\Http\Controllers\StudentController');
 });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
