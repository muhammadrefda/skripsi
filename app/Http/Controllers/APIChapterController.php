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

    /*KELAS 8*/

    public function showIps8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showBind8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }
    public function showBing8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPenjas8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 4], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPkn8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 3], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showIpa8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 9], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPrakarya8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPai8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 7], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showSeniBudaya8Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 8], ["grade_id", "=", 2]])->get();

        return response()->json(['data' => $chapters], 200);

    }


    /*KELAS 9*/

    public function showIps9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showBind9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }
    public function showBing9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPenjas9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 4], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPkn9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 3], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showIpa9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 9], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPrakarya9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showPai9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 7], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

    public function showSeniBudaya9Bab()
    {
        $chapters = Chapter::where([["subject_id", "=", 8], ["grade_id", "=", 3]])->get();

        return response()->json(['data' => $chapters], 200);

    }

}
