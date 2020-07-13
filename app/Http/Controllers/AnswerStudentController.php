<?php

namespace App\Http\Controllers;

use App\AnswerStudent;
use App\DailyTest;
use App\Score;
use App\User;
use Illuminate\Http\Request;
use App\Traits;
use Illuminate\Support\Facades\DB;

/**
 * @method showOne($jawabanSiswa)
 */
class AnswerStudentController extends Controller
{
    public function index(){

        $chapters = AnswerStudent::all();

        return response()->json(['data' => $chapters], 200);
    }

    public function store($id, Request $request){

//        $rules = [
//            'answerStudentColumn' => 'required',
//        ];
//        $this->validate($request, $rules);

//        $data = $request->all();
//
//        $data['user_id'] = $user->id;
//        $data['score_id'] = $score->value;
//        $data['dailyTest_id'] = $dailyTest->question;
//
//        $jawabanSiswa = AnswerStudent::create($data);
//
//        return $this->showOne($jawabanSiswa);


    }

    public function simpan(){

//        $chapters = DailyTest::where([["subject_id", "=", 1], ["grade_id", "=", 1], ["chapter_id", "=", 1]])->get();

        $chapters = DB::table('daily_tests')
            ->join('grades','daily_tests.grade_id','=','grades.id')
            ->join('subjects','daily_tests.subject_id','=','subjects.id')
            ->join('chapters','daily_tests.chapter_id','=','chapters.id')
            ->select('daily_tests.question')
            ->where('grades.id','=',1)
            ->where('subjects.id','=',1)
            ->where('chapters.id','=',1)
            ->get();
        return response()->json(['data' => $chapters], 200);
    }

    public function student_answer(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);

        $user = AnswerStudent::create([
            'answerStudentColumn' => $request->answerStudentColumn,
            'nilaiSiswa' => $request->nilaiSiswa,
        ]);

        return response()->json($user);
    }



}
