<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;

class APIChapterController extends Controller
{

    public function showIpsBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showBindBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }
    public function showBingBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPenjasBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 4], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPknBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 3], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showIpaBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 9], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPrakaryaBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPaiBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 7], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showSeniBudayaBab()
    {
        $chapters = Chapter::where([["subject_id", "=", 8], ["grade_id", "=", 1]])->get();

        return response()->json(['data' => $chapters], 200);

    }

}
