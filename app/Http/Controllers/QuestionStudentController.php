<?php

namespace App\Http\Controllers;

use App\AnswerStudent;
use App\Chapter;
use App\DailyTest;
use Illuminate\Http\Request;
use App\Traits;
class QuestionStudentController extends Controller
{

    //ips kelas 8 , bab 1
    public function index(){
        $chapters = DailyTest::where([["subject_id", "=", 1], ["grade_id", "=", 1],["chapter_id", "=", 16]])->get();
//        $chapters = DailyTest::findOrFail($id);

        return response()->json(['data' => $chapters], 200);
    }
}
