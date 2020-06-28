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


Route::get('/table', function () {
    return view('tables');
});


Route::get('/login', function () {
    return view('admin.login');
});


Route::get('/register', function () {
    return view('admin.register');
});


Route::prefix('mata-pelajaran')->group(function (){

    Route::get('/', function () {
        return view('mata_pelajaran.index');
    });
});

Route::prefix('bab')->group(function (){

    Route::get('/', function () {
        return view('bab.index');
    });
});

Route::prefix('soal')->group(function () {
    Route::get('/', function () {
        return view('soal.index');
    });

    Route::get('/edit', function () {
        return view('soal.edit');
    });

    Route::get('/create', function () {
        return view('soal.create');
    });
});

Route::prefix('nilai')->group(function (){

    Route::get('/', function () {
        return view('nilai.index');
    });

    Route::get('/tampilkan', function () {
        return view('nilai.show');
    });
});

