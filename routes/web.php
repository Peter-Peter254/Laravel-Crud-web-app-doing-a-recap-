<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('students','\App\Http\Controllers\StudentController');
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');