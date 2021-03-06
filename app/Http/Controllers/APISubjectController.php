<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Subject;
use Illuminate\Http\Request;

class APISubjectController extends Controller
{

    public function show($id)
    {
        $subjects = Subject::findOrFail($id);

        return response()->json(['data' => $subjects], 200);

    }
}
