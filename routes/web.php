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
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//Route::get('soal','SoalController@index')->name('');


//Route::resource('bab7.soal7','ChapterTestController');


Route::resource('mata-pelajaran7','Kelas7\SubjectController');
Route::resource('bab7','Kelas7\ChapterController');
//lagi yg dibawah ini
Route::resource('soal7','Kelas7\DailyTestController');



Route::get('/soal/tampil', 'DailyTestController@showSubject')->name('tampil');

Route::resource('nilai7','Kelas7\ScoreController');


Route::resource('mata-pelajaran8','Kelas8\SubjectController');
Route::resource('bab8','Kelas8\ChapterController');
Route::resource('soal8','Kelas8\DailyTestController');


Route::resource('mata-pelajaran9','Kelas9\SubjectController');
Route::resource('bab9','Kelas9\ChapterController');
Route::resource('soal9','Kelas9\DailyTestController');

