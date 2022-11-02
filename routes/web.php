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

Route::get('/admin', function(){
    return view('User.Admin.dashboard');
})->middleware('admin');

Route::get('/employer', function(){
    return view('User.Employer.dashboard');
})->middleware('employer');

Route::get('/jobseeker', function(){
    return view('User.Jobseeker.dashboard');
})->middleware('jobseeker');

// Employer Registration
Route::view('employer/profile','auth.employer-register')->name('employer.registration');
Route::post('employer/profile/store','App\Http\Controllers\EmployerProfileController@store')->name('employer.store');


// Employer Profile
Route::get('/employer/editprofile', 'App\Http\Controllers\EmployerProfileController@create')->name('employer.edit');
Route::post('/employer/store', 'App\Http\Controllers\EmployerProfileController@editfield')->name('employer.store');

// Job Post
Route::get('/employer/postjobs', 'App\Http\Controllers\EmployerProfileController@postjobs')->name('employer.post');


// Jobseeker Profile
Route::get('/jobseeker/editprofile', 'App\Http\Controllers\JobseekerProfileController@create');
Route::post('/jobseeker/store', 'App\Http\Controllers\JobseekerProfileController@editfield')->name('jobseeker.store');