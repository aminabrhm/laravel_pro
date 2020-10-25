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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//personal information
Route::resource('personalInfo', 'App\Http\Controllers\personalController')->name('*', 'personalInfo')->middleware('auth');
Route::resource('jobInfo', 'App\Http\Controllers\JobInfoController')->name('*', 'jobInfo')->middleware('auth');



Route::resource('contactInfo', 'App\Http\Controllers\ContactInfoController')->name('*', 'contactInfo')->middleware('auth');
