<?php

namespace App\Http\Controllers\Kelas9\BahasaInggris;

use App\Chapter;
use App\DailyTest;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BahasaInggris9Controller extends Controller
{
    public function index()
    {

        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();
        return view('kelas9.BahasaInggris.index',compact('chapters'));


    }

    public function showBab(){
        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();
        return view('kelas9.BahasaInggris.soal',compact('chapters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $chapters = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();
        $grades = Grade::all();
        $subjects = Subject::all();
        $data = array(
            'chapters'  => $chapters,
            'grades' => $grades,
            'subjects' => $subjects,
        );

        return view('kelas9.BahasaInggris.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_test = new DailyTest;

        $new_test->chapter_id = $request->get('chapter_id');
        $new_test->subject_id = $request->get('subject_id');
        $new_test->grade_id = $request->get('grade_id');
        $new_test->question = $request->get('question');
        $new_test->answer_teacher = $request->get('answer_teacher');
        $new_test->keyword = $request->get('keyword');

        $new_test->save();

        return redirect()->route('kelas9.bing.create')
            ->with('success',' created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $bab = Chapter::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();

        $dailyTests = DailyTest::where([["subject_id", "=", 2], ["grade_id", "=", 3]])->get();
        return view('kelas9.BahasaInggris.show',compact('dailyTests','bab'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dailyTest = DailyTest::findOrFail($id);

        $dailyTest->forceDelete();
        return redirect()->route('kelas9.bing.soal.tampil')->with('success delete soal');

    }
}
