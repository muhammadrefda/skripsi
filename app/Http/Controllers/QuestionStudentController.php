<?php

namespace App\Http\Controllers;

use App\AnswerStudent;
use App\Chapter;
use App\DailyTest;
use Illuminate\Http\Request;
use App\Traits;
class QuestionStudentController extends Controller
{
    public function index($id){
//        $chapters = DailyTest::where([["subject_id", "=", 1], ["grade_id", "=", 2],["chapter_id", "=", 1]])->get();
        $chapters = DailyTest::findOrFail($id);
//        dd($chapters);

        return response()->json(['data' => $chapters], 200);

    }
}
