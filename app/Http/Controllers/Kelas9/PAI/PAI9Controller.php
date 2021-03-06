<?php

namespace App\Http\Controllers\Kelas9\PAI;

use App\Chapter;
use App\DailyTest;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PAI9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $chapters = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 3]])->get();
        return view('kelas9.PAI.index',compact('chapters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chapters = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 3]])->get();
        $grades = Grade::all();
        $subjects = Subject::all();
        $data = array(
            'chapters'  => $chapters,
            'grades' => $grades,
            'subjects' => $subjects,
        );

        return view('kelas9.PAI.create', $data);

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

        return redirect()->route('kelas9.pai.create')
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
        $bab = Chapter::where([["subject_id", "=", 5], ["grade_id", "=", 3]])->get();

        $dailyTests = DailyTest::where([["subject_id", "=", 5], ["grade_id", "=", 3]])->get();
        return view('kelas9.PAI.show',compact('dailyTests','bab'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $dailyTest
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dailyTest = DailyTest::findOrFail($id);

        return view('kelas9.PAI.edit', ['dailyTest' => $dailyTest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dailyTest = DailyTest::findOrFail($id);

        $dailyTest->question = $request->get('question');
        $dailyTest->answer_teacher = $request->get('answer_teacher');
        $dailyTest->keyword = $request->get('keyword');

        $dailyTest->save();

        return redirect()
            ->route('kelas9.pai.soal.tampil')
            ->with('status','Great! Updated successfully');
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
        return redirect()->route('kelas9.pai.soal.tampil')->with('success delete soal');

    }
}
