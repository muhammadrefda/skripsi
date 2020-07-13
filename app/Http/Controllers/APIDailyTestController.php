<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\DailyTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIDailyTestController extends Controller
{
    public function showIpsSoal()
    {
        $chapters = DailyTest::all();

        return response()->json(['data' => $chapters], 200);

    }

    public function mulaiTestIps(Request $request)
    {

        $chapters = DailyTest::create([
//            'question' => $request->question,
            //'answer_teacher' =>$answ, //Tampil aja, ga perlu diisi
            'answer_student' =>$request->answer, //Buat isian siswa
//            'keyword' =>$request->keyword,
            'chapter_id'=>$request->chapter_id,
            'subject_id'=>$request->subject_id,
            'grade_id',
        ]);

        return response()->json(['data' => $chapters], 200);

    }

    public function tampilPertanyaanIps(){

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
}
