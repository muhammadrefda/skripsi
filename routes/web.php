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
Route::get('/', function () {return view('dashboard');});


Route::post('/register', 'UserController@postRegister')->name('register');
Route::get('/register', 'UserController@getRegister');

Route::post('/login', 'UserController@postLogin')->name('login');
Route::get('/login', 'UserController@getLogin');

//START KELAS 7
Route::resource('mata-pelajaran7','Kelas7\SubjectController');
//Route::resource('bab7','Kelas7\ChapterController');
Route::resource('soal7','Kelas7\DailyTestController');
Route::resource('nilai7','Kelas7\ScoreController');


Route::prefix('kelas-7/penjaskes')->group(function (){
    Route::get('/','Kelas7\Penjaskes\Penjaskes7Controller@index')->name('kelas7.penjas');
    Route::get('/bab/soal','Kelas7\Penjaskes\Penjaskes7Controller@showBab')->name('kelas7.penjas.soal');
    Route::get('/bab/soal/tambah','Kelas7\Penjaskes\Penjaskes7Controller@create')->name('kelas7.penjas.create');
    Route::post('/bab/soal','Kelas7\Penjaskes\Penjaskes7Controller@store')->name('kelas7.penjas.store');
    Route::get('/soal','Kelas7\Penjaskes\Penjaskes7Controller@showBab')->name('kelas7.penjas.soal.lihat');
//tampilin detail soal penjas
    Route::get('/soal/tampil','Kelas7\Penjaskes\Penjaskes7Controller@show')->name('kelas7.penjas.soal.tampil');
//Route::get('kelas-7/penjaskes/soal/{id}/ubah','Kelas7\Penjaskes\Penjaskes7Controller@edit')->name('kelas7.penjas.soal.ubah');
//Route::put('kelas-7/penjaskes/soal/{id}','Kelas7\Penjaskes\Penjaskes7Controller@update');
    Route::delete('/soal/{id}','Kelas7\Penjaskes\Penjaskes7Controller@destroy')->name('kelas7.penjas.soal.hapus');
});

Route::prefix('kelas-7/ipa')->group(function () {
    Route::get('/', 'Kelas7\IPA\IPA7Controller@index')->name('kelas7.ipa');
    Route::get('/bab/soal', 'Kelas7\IPA\IPA7Controller@showBab')->name('kelas7.ipa.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\IPA\IPA7Controller@create')->name('kelas7.ipa.create');
    Route::post('/bab/soal', 'Kelas7\IPA\IPA7Controller@store')->name('kelas7.ipa.store');
    Route::get('/soal', 'Kelas7\IPA\IPA7Controller@showBab')->name('kelas7.ipa.soal.lihat');
//tampilin detail soal ipa
    Route::get('/soal/tampil', 'Kelas7\IPA\IPA7Controller@show')->name('kelas7.ipa.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\IPA\IPA7Controller@destroy')->name('kelas7.ipa.soal.hapus');
});

Route::prefix('kelas-7/ips')->group(function () {
    Route::get('/', 'Kelas7\IPS\IPS7Controller@index')->name('kelas7.ips');
    Route::get('/bab/soal', 'Kelas7\IPS\IPS7Controller@showBab')->name('kelas7.ips.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\IPS\IPS7Controller@create')->name('kelas7.ips.create');
    Route::post('/bab/soal', 'Kelas7\IPS\IPS7Controller@store')->name('kelas7.ips.store');
    Route::get('/soal', 'Kelas7\IPS\IPS7Controller@showBab')->name('kelas7.ips.soal.lihat');
//tampilin detail soal ips
    Route::get('/soal/tampil', 'Kelas7\IPS\IPS7Controller@show')->name('kelas7.ips.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\IPS\IPS7Controller@destroy')->name('kelas7.ips.soal.hapus');
});

//Route::get('kelas-7/pai','Kelas7\PAI\PAI7Controller@index')->name('kelas7.pai');
Route::prefix('kelas-7/pai')->group(function () {
    Route::get('/', 'Kelas7\PAI\PAI7Controller@index')->name('kelas7.pai');
    Route::get('/bab/soal', 'Kelas7\PAI\PAI7Controller@showBab')->name('kelas7.pai.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\PAI\PAI7Controller@create')->name('kelas7.pai.create');
    Route::post('/bab/soal', 'Kelas7\PAI\PAI7Controller@store')->name('kelas7.pai.store');
    Route::get('/soal', 'Kelas7\PAI\PAI7Controller@showBab')->name('kelas7.pai.soal.lihat');
//tampilin detail soal ips
    Route::get('/soal/tampil', 'Kelas7\PAI\PAI7Controller@show')->name('kelas7.pai.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\PAI\PAI7Controller@destroy')->name('kelas7.pai.soal.hapus');
});

//Route::get('kelas-7/senibudaya','Kelas7\SeniBudaya\SeniBudaya7Controller@index')->name('kelas7.senibudaya');
Route::prefix('kelas-7/senibudaya')->group(function () {
    Route::get('/', 'Kelas7\SeniBudaya\SeniBudaya7Controller@index')->name('kelas7.senibudaya');
    Route::get('/bab/soal', 'Kelas7\SeniBudaya\SeniBudaya7Controller@showBab')->name('kelas7.senibudaya.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\SeniBudaya\SeniBudaya7Controller@create')->name('kelas7.senibudaya.create');
    Route::post('/bab/soal', 'Kelas7\SeniBudaya\SeniBudaya7Controller@store')->name('kelas7.senibudaya.store');
    Route::get('/soal', 'Kelas7\SeniBudaya\SeniBudaya7Controller@showBab')->name('kelas7.senibudaya.soal.lihat');
//tampilin detail soal seni budaya
    Route::get('/soal/tampil', 'Kelas7\SeniBudaya\SeniBudaya7Controller@show')->name('kelas7.senibudaya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\SeniBudaya\SeniBudaya7Controller@destroy')->name('kelas7.senibudaya.soal.hapus');
});

Route::prefix('kelas-7/BahasaIndonesia')->group(function () {
    Route::get('/', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@index')->name('kelas7.bind');
    Route::get('/bab/soal', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@showBab')->name('kelas7.bind.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@create')->name('kelas7.bind.create');
    Route::post('/bab/soal', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@store')->name('kelas7.bind.store');
    Route::get('/soal', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@showBab')->name('kelas7.bind.soal.lihat');
//tampilin detail soal b.ind
    Route::get('/soal/tampil', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@show')->name('kelas7.bind.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\BahasaIndonesia\BahasaIndonesia7Controller@destroy')->name('kelas7.bind.soal.hapus');
});

Route::prefix('kelas-7/BahasaInggris')->group(function () {
        Route::get('/', 'Kelas7\BahasaInggris\BahasaInggris7Controller@index')->name('kelas7.bing');
        Route::get('/bab/soal', 'Kelas7\BahasaInggris\BahasaInggris7Controller@showBab')->name('kelas7.bing.soal');
        Route::get('/bab/soal/tambah', 'Kelas7\BahasaInggris\BahasaInggris7Controller@create')->name('kelas7.bing.create');
        Route::post('/bab/soal', 'Kelas7\BahasaInggris\BahasaInggris7Controller@store')->name('kelas7.bing.store');
        Route::get('/soal', 'Kelas7\BahasaInggris\BahasaInggris7Controller@showBab')->name('kelas7.bing.soal.lihat');
//tampilin detail soal b.ing
        Route::get('/soal/tampil', 'Kelas7\BahasaInggris\BahasaInggris7Controller@show')->name('kelas7.bing.soal.tampil');
        Route::delete('/soal/{id}', 'Kelas7\BahasaInggris\BahasaInggris7Controller@destroy')->name('kelas7.bing.soal.hapus');
    });

//Route::get('kelas-7/prakarya','Kelas7\Prakarya\Prakarya7Controller@index')->name('kelas7.prakarya');
Route::prefix('kelas-7/prakarya')->group(function () {
    Route::get('/', 'Kelas7\Prakarya\Prakarya7Controller@index')->name('kelas7.prakarya');
    Route::get('/bab/soal', 'Kelas7\Prakarya\Prakarya7Controller@showBab')->name('kelas7.prakarya.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\Prakarya\Prakarya7Controller@create')->name('kelas7.prakarya.create');
    Route::post('/bab/soal', 'Kelas7\Prakarya\Prakarya7Controller@store')->name('kelas7.prakarya.store');
    Route::get('/soal', 'Kelas7\Prakarya\Prakarya7Controller@showBab')->name('kelas7.prakarya.soal.lihat');
//tampilin detail soal prakarya
    Route::get('/soal/tampil', 'Kelas7\Prakarya\Prakarya7Controller@show')->name('kelas7.prakarya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\Prakarya\Prakarya7Controller@destroy')->name('kelas7.prakarya.soal.hapus');
});

Route::prefix('kelas-7/pkn')->group(function (){
    Route::get('/','Kelas7\PKn\PKn7Controller@index')->name('kelas7.pkn');
    Route::get('/bab/soal', 'Kelas7\PKn\PKn7Controller@showBab')->name('kelas7.pkn.soal');
    Route::get('/bab/soal/tambah', 'Kelas7\PKn\PKn7Controller@create')->name('kelas7.pkn.create');
    Route::post('/bab/soal', 'Kelas7\PKn\PKn7Controller@store')->name('kelas7.pkn.store');
    Route::get('/soal', 'Kelas7\PKn\PKn7Controller@showBab')->name('kelas7.pkn.soal.lihat');
//tampilin detail soal prakarya
    Route::get('/soal/tampil', 'Kelas7\PKn\PKn7Controller@show')->name('kelas7.pkn.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas7\PKn\PKn7Controller@destroy')->name('kelas7.pkn.soal.hapus');
});
/* FINISH KELAS 7 */


/* START KELAS 8 */

Route::resource('mata-pelajaran8','Kelas8\SubjectController');
Route::resource('bab8','Kelas8\ChapterController');
Route::resource('soal8','Kelas8\DailyTestController');


//Route::resource('kelas-8/pai','Kelas8\PAI\PAI8Controller');
//Route::resource('kelas-8/BahasaIndonesia','Kelas8\BahasaIndonesia\BahasaIndonesia8Controller');
//Route::resource('kelas-8/BahasaInggris','Kelas8\BahasaInggris\BahasaInggris8Controller');
//Route::resource('kelas-8/ipa','Kelas8\IPA\IPA8Controller');
//Route::resource('kelas-8/ips','Kelas8\IPS\IPS8Controller');
//Route::resource('kelas-8/pkn','Kelas8\PKn\PKn8Controller');
//Route::resource('kelas-8/penjaskes','Kelas8\Penjaskes\Penjaskes8Controller');
//Route::resource('kelas-8/prakarya','Kelas8\Prakarya\Prakarya8Controller');
//Route::resource('kelas-8/senibudaya','Kelas8\SeniBudaya\SeniBudaya8Controller');

Route::prefix('kelas-8/penjaskes')->group(function (){
    Route::get('/','Kelas8\Penjaskes\Penjaskes8Controller@index')->name('kelas8.penjas');
    Route::get('/bab/soal','Kelas8\Penjaskes\Penjaskes8Controller@showBab')->name('kelas8.penjas.soal');
    Route::get('/bab/soal/tambah','Kelas8\Penjaskes\Penjaskes8Controller@create')->name('kelas8.penjas.create');
    Route::post('/bab/soal','Kelas8\Penjaskes\Penjaskes8Controller@store')->name('kelas8.penjas.store');
    Route::get('/soal','Kelas8\Penjaskes\Penjaskes8Controller@showBab')->name('kelas8.penjas.soal.lihat');
//tampilin detail soal penjas
    Route::get('/soal/tampil','Kelas8\Penjaskes\Penjaskes8Controller@show')->name('kelas8.penjas.soal.tampil');
//Route::get('kelas-7/penjaskes/soal/{id}/ubah','Kelas7\Penjaskes\Penjaskes7Controller@edit')->name('kelas7.penjas.soal.ubah');
//Route::put('kelas-7/penjaskes/soal/{id}','Kelas7\Penjaskes\Penjaskes7Controller@update');
    Route::delete('/soal/{id}','Kelas8\Penjaskes\Penjaskes8Controller@destroy')->name('kelas8.penjas.soal.hapus');
});

Route::prefix('kelas-8/ipa')->group(function () {
    Route::get('/', 'Kelas8\IPA\IPA8Controller@index')->name('kelas8.ipa');
    Route::get('/bab/soal', 'Kelas8\IPA\IPA8Controller@showBab')->name('kelas8.ipa.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\IPA\IPA8Controller@create')->name('kelas8.ipa.create');
    Route::post('/bab/soal', 'Kelas8\IPA\IPA8Controller@store')->name('kelas8.ipa.store');
    Route::get('/soal', 'Kelas8\IPA\IPA8Controller@showBab')->name('kelas8.ipa.soal.lihat');
//tampilin detail soal ipa
    Route::get('/soal/tampil', 'Kelas8\IPA\IPA8Controller@show')->name('kelas8.ipa.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\IPA\IPA8Controller@destroy')->name('kelas8.ipa.soal.hapus');
});

Route::prefix('kelas-8/ips')->group(function () {
    Route::get('/', 'Kelas8\IPS\IPS8Controller@index')->name('kelas8.ips');
    Route::get('/bab/soal', 'Kelas8\IPS\IPS8Controller@showBab')->name('kelas8.ips.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\IPS\IPS8Controller@create')->name('kelas8.ips.create');
    Route::post('/bab/soal', 'Kelas8\IPS\IPS8Controller@store')->name('kelas8.ips.store');
    Route::get('/soal', 'Kelas8\IPS\IPS8Controller@showBab')->name('kelas8.ips.soal.lihat');
//tampilin detail soal ips
    Route::get('/soal/tampil', 'Kelas8\IPS\IPS8Controller@show')->name('kelas8.ips.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\IPS\IPS7Controller@destroy')->name('kelas8.ips.soal.hapus');
});

Route::prefix('kelas-8/pai')->group(function () {
    Route::get('/', 'Kelas8\PAI\PAI8Controller@index')->name('kelas8.pai');
    Route::get('/bab/soal', 'Kelas8\PAI\PAI8Controller@showBab')->name('kelas8.pai.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\PAI\PAI8Controller@create')->name('kelas8.pai.create');
    Route::post('/bab/soal', 'Kelas8\PAI\PAI8Controller@store')->name('kelas8.pai.store');
    Route::get('/soal', 'Kelas8\PAI\PAI8Controller@showBab')->name('kelas8.pai.soal.lihat');
//tampilin detail soal ips
    Route::get('/soal/tampil', 'Kelas8\PAI\PAI8Controller@show')->name('kelas8.pai.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\PAI\PAI8Controller@destroy')->name('kelas8.pai.soal.hapus');
});

Route::prefix('kelas-8/senibudaya')->group(function () {
    Route::get('/', 'Kelas8\SeniBudaya\SeniBudaya8Controller@index')->name('kelas8.senibudaya');
    Route::get('/bab/soal', 'Kelas8\SeniBudaya\SeniBudaya8Controller@showBab')->name('kelas8.senibudaya.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\SeniBudaya\SeniBudaya8Controller@create')->name('kelas8.senibudaya.create');
    Route::post('/bab/soal', 'Kelas8\SeniBudaya\SeniBudaya8Controller@store')->name('kelas8.senibudaya.store');
    Route::get('/soal', 'Kelas8\SeniBudaya\SeniBudaya8Controller@showBab')->name('kelas8.senibudaya.soal.lihat');
//tampilin detail soal seni budaya
    Route::get('/soal/tampil', 'Kelas8\SeniBudaya\SeniBudaya8Controller@show')->name('kelas8.senibudaya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\SeniBudaya\SeniBudaya8Controller@destroy')->name('kelas8.senibudaya.soal.hapus');
});

Route::prefix('kelas-8/BahasaIndonesia')->group(function () {
    Route::get('/', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@index')->name('kelas8.bind');
    Route::get('/bab/soal', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@showBab')->name('kelas8.bind.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@create')->name('kelas8.bind.create');
    Route::post('/bab/soal', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@store')->name('kelas8.bind.store');
    Route::get('/soal', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@showBab')->name('kelas8.bind.soal.lihat');
//tampilin detail soal b.ind
    Route::get('/soal/tampil', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@show')->name('kelas8.bind.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\BahasaIndonesia\BahasaIndonesia8Controller@destroy')->name('kelas8.bind.soal.hapus');
});

Route::prefix('kelas-8/BahasaInggris')->group(function () {
    Route::get('/', 'Kelas8\BahasaInggris\BahasaInggris8Controller@index')->name('kelas8.bing');
    Route::get('/bab/soal', 'Kelas8\BahasaInggris\BahasaInggris8Controller@showBab')->name('kelas8.bing.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\BahasaInggris\BahasaInggris8Controller@create')->name('kelas8.bing.create');
    Route::post('/bab/soal', 'Kelas8\BahasaInggris\BahasaInggris8Controller@store')->name('kelas8.bing.store');
    Route::get('/soal', 'Kelas8\BahasaInggris\BahasaInggris8Controller@showBab')->name('kelas8.bing.soal.lihat');
//tampilin detail soal b.ing
    Route::get('/soal/tampil', 'Kelas8\BahasaInggris\BahasaInggris8Controller@show')->name('kelas8.bing.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\BahasaInggris\BahasaInggris8Controller@destroy')->name('kelas8.bing.soal.hapus');
});

Route::prefix('kelas-8/prakarya')->group(function () {
    Route::get('/', 'Kelas8\Prakarya\Prakarya8Controller@index')->name('kelas8.prakarya');
    Route::get('/bab/soal', 'Kelas8\Prakarya\Prakarya8Controller@showBab')->name('kelas8.prakarya.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\Prakarya\Prakarya8Controller@create')->name('kelas8.prakarya.create');
    Route::post('/bab/soal', 'Kelas8\Prakarya\Prakarya8Controller@store')->name('kelas8.prakarya.store');
    Route::get('/soal', 'Kelas8\Prakarya\Prakarya8Controller@showBab')->name('kelas8.prakarya.soal.lihat');
//tampilin detail soal prakarya
    Route::get('/soal/tampil', 'Kelas8\Prakarya\Prakarya8Controller@show')->name('kelas8.prakarya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\Prakarya\Prakarya8Controller@destroy')->name('kelas8.prakarya.soal.hapus');
});

Route::prefix('kelas-8/pkn')->group(function (){
    Route::get('/','Kelas8\PKn\PKn8Controller@index')->name('kelas8.pkn');
    Route::get('/bab/soal', 'Kelas8\PKn\PKn8Controller@showBab')->name('kelas8.pkn.soal');
    Route::get('/bab/soal/tambah', 'Kelas8\PKn\PKn8Controller@create')->name('kelas8.pkn.create');
    Route::post('/bab/soal', 'Kelas8\PKn\PKn8Controller@store')->name('kelas8.pkn.store');
    Route::get('/soal', 'Kelas8\PKn\PKn8Controller@showBab')->name('kelas8.pkn.soal.lihat');
//tampilin detail soal pkn
    Route::get('/soal/tampil', 'Kelas8\PKn\PKn8Controller@show')->name('kelas8.pkn.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas8\PKn\PKn8Controller@destroy')->name('kelas8.pkn.soal.hapus');
});
/* FINISH KELAS 8 */


/* START KELAS 9 */
Route::resource('mata-pelajaran9','Kelas9\SubjectController');
Route::resource('bab9','Kelas9\ChapterController');
Route::resource('soal9','Kelas9\DailyTestController');

Route::prefix('kelas-9/penjaskes')->group(function (){
    Route::get('/','Kelas9\Penjaskes\Penjaskes9Controller@index')->name('kelas9.penjas');
    Route::get('/bab/soal','Kelas9\Penjaskes\Penjaskes9Controller@showBab')->name('kelas9.penjas.soal');
    Route::get('/bab/soal/tambah','Kelas9\Penjaskes\Penjaskes9Controller@create')->name('kelas9.penjas.create');
    Route::post('/bab/soal','Kelas9\Penjaskes\Penjaskes9Controller@store')->name('kelas9.penjas.store');
    Route::get('/soal','Kelas9\Penjaskes\Penjaskes9Controller@showBab')->name('kelas9.penjas.soal.lihat');
    Route::get('/soal/tampil','Kelas9\Penjaskes\Penjaskes9Controller@show')->name('kelas9.penjas.soal.tampil');
    Route::delete('/soal/{id}','Kelas9\Penjaskes\Penjaskes9Controller@destroy')->name('kelas9.penjas.soal.hapus');
});

Route::prefix('kelas-9/ipa')->group(function () {
    Route::get('/', 'Kelas9\IPA\IPA9Controller@index')->name('kelas9.ipa');
    Route::get('/bab/soal', 'Kelas9\IPA\IPA9Controller@showBab')->name('kelas9.ipa.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\IPA\IPA9Controller@create')->name('kelas9.ipa.create');
    Route::post('/bab/soal', 'Kelas9\IPA\IPA9Controller@store')->name('kelas9.ipa.store');
    Route::get('/soal', 'Kelas9\IPA\IPA9Controller@showBab')->name('kelas9.ipa.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\IPA\IPA9Controller@show')->name('kelas9.ipa.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\IPA\IPA9Controller@destroy')->name('kelas9.ipa.soal.hapus');
});

Route::prefix('kelas-9/ips')->group(function () {
    Route::get('/', 'Kelas9\IPS\IPS9Controller@index')->name('kelas9.ips');
    Route::get('/bab/soal', 'Kelas9\IPS\IPS9Controller@showBab')->name('kelas9.ips.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\IPS\IPS9Controller@create')->name('kelas9.ips.create');
    Route::post('/bab/soal', 'Kelas9\IPS\IPS9Controller@store')->name('kelas9.ips.store');
    Route::get('/soal', 'Kelas9\IPS\IPS9Controller@showBab')->name('kelas9.ips.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\IPS\IPS9Controller@show')->name('kelas9.ips.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\IPS\IPS9Controller@destroy')->name('kelas9.ips.soal.hapus');
});

Route::prefix('kelas-9/pai')->group(function () {
    Route::get('/', 'Kelas9\PAI\PAI9Controller@index')->name('kelas9.pai');
    Route::get('/bab/soal', 'Kelas9\PAI\PAI9Controller@showBab')->name('kelas9.pai.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\PAI\PAI9Controller@create')->name('kelas9.pai.create');
    Route::post('/bab/soal', 'Kelas9\PAI\PAI9Controller@store')->name('kelas9.pai.store');
    Route::get('/soal', 'Kelas9\PAI\PAI9Controller@showBab')->name('kelas9.pai.soal.lihat');
//tampilin detail soal ips
    Route::get('/soal/tampil', 'Kelas9\PAI\PAI9Controller@show')->name('kelas9.pai.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\PAI\PAI9Controller@destroy')->name('kelas9.pai.soal.hapus');
});

Route::prefix('kelas-9/seni-budaya')->group(function () {
    Route::get('/', 'Kelas9\SeniBudaya\SeniBudaya9Controller@index')->name('kelas9.senibudaya');
    Route::get('/bab/soal', 'Kelas9\SeniBudaya\SeniBudaya9Controller@showBab')->name('kelas9.senibudaya.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\SeniBudaya\SeniBudaya9Controller@create')->name('kelas9.senibudaya.create');
    Route::post('/bab/soal', 'Kelas9\SeniBudaya\SeniBudaya9Controller@store')->name('kelas9.senibudaya.store');
    Route::get('/soal', 'Kelas9\SeniBudaya\SeniBudaya9Controller@showBab')->name('kelas9.senibudaya.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\SeniBudaya\SeniBudaya8Controller@show')->name('kelas9.senibudaya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\SeniBudaya\SeniBudaya8Controller@destroy')->name('kelas9.senibudaya.soal.hapus');
});

Route::prefix('kelas-9/Bahasa-indonesia')->group(function () {
    Route::get('/', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@index')->name('kelas9.bind');
    Route::get('/bab/soal', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@showBab')->name('kelas9.bind.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@create')->name('kelas9.bind.create');
    Route::post('/bab/soal', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@store')->name('kelas9.bind.store');
    Route::get('/soal', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@showBab')->name('kelas9.bind.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@show')->name('kelas9.bind.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\BahasaIndonesia\BahasaIndonesia9Controller@destroy')->name('kelas9.bind.soal.hapus');
});

Route::prefix('kelas-9/Bahasa-inggris')->group(function () {
    Route::get('/', 'Kelas9\BahasaInggris\BahasaInggris9Controller@index')->name('kelas9.bing');
    Route::get('/bab/soal', 'Kelas9\BahasaInggris\BahasaInggris9Controller@showBab')->name('kelas9.bing.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\BahasaInggris\BahasaInggris9Controller@create')->name('kelas9.bing.create');
    Route::post('/bab/soal', 'Kelas9\BahasaInggris\BahasaInggris9Controller@store')->name('kelas9.bing.store');
    Route::get('/soal', 'Kelas9\BahasaInggris\BahasaInggris9Controller@showBab')->name('kelas9.bing.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\BahasaInggris\BahasaInggris9Controller@show')->name('kelas9.bing.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\BahasaInggris\BahasaInggris9Controller@destroy')->name('kelas9.bing.soal.hapus');
});

Route::prefix('kelas-9/prakarya')->group(function () {
    Route::get('/', 'Kelas9\Prakarya\Prakarya9Controller@index')->name('kelas9.prakarya');
    Route::get('/bab/soal', 'Kelas9\Prakarya\Prakarya9Controller@showBab')->name('kelas9.prakarya.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\Prakarya\Prakarya9Controller@create')->name('kelas9.prakarya.create');
    Route::post('/bab/soal', 'Kelas9\Prakarya\Prakarya9Controller@store')->name('kelas9.prakarya.store');
    Route::get('/soal', 'Kelas9\Prakarya\Prakarya9Controller@showBab')->name('kelas9.prakarya.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\Prakarya\Prakarya9Controller@show')->name('kelas9.prakarya.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\Prakarya\Prakarya9Controller@destroy')->name('kelas9.prakarya.soal.hapus');
});

Route::prefix('kelas-9/pkn')->group(function (){
    Route::get('/','Kelas9\PKn\PKn9Controller@index')->name('kelas9.pkn');
    Route::get('/bab/soal', 'Kelas9\PKn\PKn9Controller@showBab')->name('kelas9.pkn.soal');
    Route::get('/bab/soal/tambah', 'Kelas9\PKn\PKn9Controller@create')->name('kelas9.pkn.create');
    Route::post('/bab/soal', 'Kelas9\PKn\PKn9Controller@store')->name('kelas9.pkn.store');
    Route::get('/soal', 'Kelas9\PKn\PKn9Controller@showBab')->name('kelas9.pkn.soal.lihat');
    Route::get('/soal/tampil', 'Kelas9\PKn\PKn9Controller@show')->name('kelas9.pkn.soal.tampil');
    Route::delete('/soal/{id}', 'Kelas9\PKn\PKn9Controller@destroy')->name('kelas9.pkn.soal.hapus');
});
/* FINISH KELAS 9 */
