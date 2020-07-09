<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::resource('grade', 'APIGradeController');
Route::resource('subject', 'APISubjectController');

// display Bab mapel kelas 7
Route::get('chapter/ips/bab', 'APIChapterController@showIpsBab');
Route::get('soal/ips','APIDailyTestController@showIpsSoal');
Route::post('soal/ips/mulai','APIDailyTestController@mulaiTestIps');
Route::get('tampil/question/ips','APIDailyTestController@tampilPertanyaanIps');

Route::get('chapter/bind/bab', 'APIChapterController@showBindBab');
Route::get('chapter/bing/bab', 'APIChapterController@showBingBab');
Route::get('chapter/penjas/bab', 'APIChapterController@showPenjasBab');
Route::get('chapter/pkn/bab', 'APIChapterController@showPknBab');
Route::get('chapter/ipa/bab', 'APIChapterController@showIpaBab');
Route::get('chapter/prakarya/bab', 'APIChapterController@showPrakaryaBab');
Route::get('chapter/pai/bab', 'APIChapterController@showPaiBab');
Route::get('chapter/senibudaya/bab', 'APIChapterController@showSeniBudayaBab');


