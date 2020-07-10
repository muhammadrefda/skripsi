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


Route::post('/register', 'UserController@postRegister')->name('register');
Route::get('/register', 'UserController@getRegister');

Route::post('/login', 'UserController@postLogin')->name('login');
Route::get('/login', 'UserController@getLogin');


Route::resource('mata-pelajaran7','Kelas7\SubjectController');
Route::resource('bab7','Kelas7\ChapterController');
Route::resource('soal7','Kelas7\DailyTestController');
Route::resource('nilai7','Kelas7\ScoreController');

/* START MAPEL KELAS 7 */
Route::get('kelas-7/pai','Kelas7\PAI\PAI7Controller@index')->name('kelas7.pai');
Route::get('kelas-7/BahasaIndonesia','Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@index')->name('kelas7.bahasaindonesia');
Route::get('kelas-7/BahasaInggris','Kelas7\BahasaInggris\BahasaInggris7Controller@index')->name('kelas7.bahasainggris');

Route::get('kelas-7/ipa','Kelas7\IPA\IPA7Controller@index')->name('kelas7.ipa');
Route::get('kelas-7/ipa/bab/soal','Kelas7\IPA\IPA7Controller@showBab')->name('kelas7.ipa.soal');


Route::get('kelas-7/ips','Kelas7\IPS\IPS7Controller@index')->name('kelas7.ips');;
Route::get('kelas-7/pkn','Kelas7\PKn\PKn7Controller@index')->name('kelas7.pkn');;

Route::get('kelas-7/penjaskes','Kelas7\Penjaskes\Penjaskes7Controller@index')->name('kelas7.penjas');
Route::get('kelas-7/penjaskes/bab/soal','Kelas7\Penjaskes\Penjaskes7Controller@showBab')->name('kelas7.penjas.soal');
Route::get('kelas-7/penjaskes/bab/soal/tambah','Kelas7\Penjaskes\Penjaskes7Controller@create')->name('kelas7.penjas.create');
Route::post('kelas-7/penjaskes/bab/soal','Kelas7\Penjaskes\Penjaskes7Controller@store')->name('kelas7.penjas.store');
Route::get('kelas-7/penjaskes/soal','Kelas7\Penjaskes\Penjaskes7Controller@showBab')->name('kelas7.penjas.soal.lihat');
//tampilin detail soal penjas
Route::get('kelas-7/penjaskes/soal/tampil','Kelas7\Penjaskes\Penjaskes7Controller@show')->name('kelas7.penjas.soal.tampil');
//ubah soal penjas
Route::get('kelas-7/penjaskes/soal/{id}/ubah','Kelas7\Penjaskes\Penjaskes7Controller@edit')->name('kelas7.penjas.soal.ubah');
Route::put('kelas-7/penjaskes/soal/{id}','Kelas7\Penjaskes\Penjaskes7Controller@update');
Route::delete('kelas-7/penjaskes/soal/{id}','Kelas7\Penjaskes\Penjaskes7Controller@destroy')->name('kelas7.penjas.soal.hapus');





Route::get('kelas-7/prakarya','Kelas7\Prakarya\Prakarya7Controller@index')->name('kelas7.prakarya');;
Route::get('kelas-7/senibudaya','Kelas7\SeniBudaya\SeniBudaya7Controller@index')->name('kelas7.senibudaya');;
/* FINISH MAPEL KELAS 7 */


/* START KELAS 8 */

Route::resource('mata-pelajaran8','Kelas8\SubjectController');
Route::resource('bab8','Kelas8\ChapterController');
Route::resource('soal8','Kelas8\DailyTestController');


Route::resource('kelas-8/pai','Kelas8\PAI\PAI8Controller');
Route::resource('kelas-8/BahasaIndonesia','Kelas8\BahasaIndonesia\BahasaIndonesia8Controller');
Route::resource('kelas-8/BahasaInggris','Kelas8\BahasaInggris\BahasaInggris8Controller');
Route::resource('kelas-8/ipa','Kelas8\IPA\IPA8Controller');
Route::resource('kelas-8/ips','Kelas8\IPS\IPS8Controller');
Route::resource('kelas-8/pkn','Kelas8\PKn\PKn8Controller');
Route::resource('kelas-8/penjaskes','Kelas8\Penjaskes\Penjaskes8Controller');
Route::resource('kelas-8/prakarya','Kelas8\Prakarya\Prakarya8Controller');
Route::resource('kelas-8/senibudaya','Kelas8\SeniBudaya\SeniBudaya8Controller');
/* FINISH MAPEL KELAS 8 */


/* START KELAS 9 */
Route::resource('mata-pelajaran9','Kelas9\SubjectController');
Route::resource('bab9','Kelas9\ChapterController');
Route::resource('soal9','Kelas9\DailyTestController');


Route::resource('kelas-9/pai','Kelas9\PAI\PAI9Controller');
Route::resource('kelas-9/BahasaIndonesia','Kelas9\BahasaIndonesia\BahasaIndonesia9Controller');
Route::resource('kelas-9/BahasaInggris','Kelas9\BahasaInggris\BahasaInggris9Controller');
Route::resource('kelas-9/ipa','Kelas9\IPA\IPA9Controller');
Route::resource('kelas-9/ips','Kelas9\IPS\IPS9Controller');
Route::resource('kelas-9/pkn','Kelas9\PKn\PKn9Controller');
Route::resource('kelas-9/penjaskes','Kelas9\Penjaskes\Penjaskes9Controller');
Route::resource('kelas-9/prakarya','Kelas9\Prakarya\Prakarya9Controller');
Route::resource('kelas-9/senibudaya','Kelas9\SeniBudaya\SeniBudaya9Controller');
/* FINISH MAPEL KELAS 9 */
