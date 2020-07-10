<?php

namespace App\Http\Controllers;

use App\AnswerStudent;
use App\DailyTest;
use App\User;
use Illuminate\Http\Request;
use App\Traits;

class AnswerStudentController extends Controller
{
    public function index(){

        $chapters = AnswerStudent::all();

        return response()->json(['data' => $chapters], 200);
    }

    public function store(Request $request){

        $answerStudent = AnswerStudent::create([
            'answerStudentColumn' => $request->answerStudentColumn,
        ]);

        return response()->json($answerStudent);
    }
}
