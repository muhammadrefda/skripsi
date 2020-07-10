<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Subject;
use Illuminate\Http\Request;

class APIGradeController extends Controller
{
    public function show($id){
        $grades = Grade::findOrFail($id);
//        $grades = Grade::all($id);

        return response()->json(['data' => $grades], 200);
    }
}
