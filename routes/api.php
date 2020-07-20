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


/*kelas 7*/
Route::get('chapter/bind/bab', 'APIChapterController@showBindBab');
Route::get('chapter/bing/bab', 'APIChapterController@showBingBab');
Route::get('chapter/penjas/bab', 'APIChapterController@showPenjasBab');
Route::get('chapter/pkn/bab', 'APIChapterController@showPknBab');
Route::get('chapter/ipa/bab', 'APIChapterController@showIpaBab');
Route::get('chapter/prakarya/bab', 'APIChapterController@showPrakaryaBab');
Route::get('chapter/pai/bab', 'APIChapterController@showPaiBab');
Route::get('chapter/senibudaya/bab', 'APIChapterController@showSeniBudayaBab');

/*kelas 8*/
Route::get('chapter/bind8/bab', 'APIChapterController@showBind8Bab');
Route::get('chapter/bing8/bab', 'APIChapterController@showBing8Bab');
Route::get('chapter/penjas8/bab', 'APIChapterController@showPenjas8Bab');
Route::get('chapter/pkn8/bab', 'APIChapterController@showPkn8Bab');
Route::get('chapter/ipa8/bab', 'APIChapterController@showIpa8Bab');
Route::get('chapter/prakarya8/bab', 'APIChapterController@showPrakarya8Bab');
Route::get('chapter/pai8/bab', 'APIChapterController@showPai8Bab');
Route::get('chapter/senibudaya8/bab', 'APIChapterController@showSeniBudaya8Bab');

/*kelas 9*/
Route::get('chapter/bind9/bab', 'APIChapterController@showBind9Bab');
Route::get('chapter/bing9/bab', 'APIChapterController@showBing9Bab');
Route::get('chapter/penjas9/bab', 'APIChapterController@showPenjas9Bab');
Route::get('chapter/pkn9/bab', 'APIChapterController@showPkn9Bab');
Route::get('chapter/ipa9/bab', 'APIChapterController@showIpa9Bab');
Route::get('chapter/prakarya9/bab', 'APIChapterController@showPrakarya9Bab');
Route::get('chapter/pai9/bab', 'APIChapterController@showPai9Bab');
Route::get('chapter/senibudaya9/bab', 'APIChapterController@showSeniBudaya9Bab');


//contoh
Route::get('pertanyaan/ips/7','QuestionStudentController@index');

Route::resource('tampilin-jawaban','AnswerStudentController');

Route::post('jawaban/siswa','AnswerStudentController@student_answer');

Route::get('tes','AnswerStudentController@simpan');



//Route::post('nilai/siswa','ScoreController@student_score');
