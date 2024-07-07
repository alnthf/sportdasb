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

// Main Sign in Sign up page

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('sign-up', 'App\Http\Controllers\TeamController@create')->name('sign-up');
Route::post('sign-up', 'App\Http\Controllers\TeamController@store')->name('sign-up.success');

Route::get('sign-in', 'App\Http\Controllers\TeamController@login')->name('sign-in');
Route::post('sign-in', 'App\Http\Controllers\TeamController@verified')->name('sign-in.success');

// Isi dashboard tim

Route::get('home', 'App\Http\Controllers\TeamController@home')->name('home');

Route::get('home/team-setting', 'App\Http\Controllers\TeamController@setting')->name('teamsetting');
Route::post('home/team-setting', 'App\Http\Controllers\TeamController@update')->name('teamsetting.changed');

// Isi dashboard kelola atlet

Route::get('home/match', 'App\Http\Controllers\AthleteController@match')->name('match');
Route::post('home/match', 'App\Http\Controllers\AthleteController@swap')->name('swap');

Route::get('home/all-athlete', 'App\Http\Controllers\AthleteController@index')->name('all-athlete');

Route::get('home/all-athlete/add-profile', 'App\Http\Controllers\AthleteController@create')->name('add-profile');
Route::post('home/all-athlete/add-profile', 'App\Http\Controllers\AthleteController@store')->name('add-profile.success');

Route::get('home/all-athlete/athlete-detail', 'App\Http\Controllers\AthleteController@show')->name('athletedetail');

Route::get('home/all-athlete/athlete-detail/athlete-setting', 'App\Http\Controllers\AthleteController@setting')->name('athletesetting');
Route::post('home/all-athlete/athlete-detail/athlete-setting', 'App\Http\Controllers\AthleteController@update')->name('athletesetting.changed');
Route::delete('home/all-athlete/athlete-detail/athlete-setting', 'App\Http\Controllers\AthleteController@destroy')->name('athletesetting.deleted');
