<?php

namespace App\Http\Controllers\Kelas7;

use App\Chapter;
use App\DailyTest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 1]])->get();
        return view('kelas7.soal.index',compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 1]])->get();
        $data = array(
            'chapters'  => $chapters,
        );

        return view('kelas7.soal.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $new_test = new DailyTest;

        $new_test->chapter_id = $request->get('chapter_id');
        $new_test->question = $request->get('question');
        $new_test->answer = $request->get('answer');
        $new_test->keyword = $request->get('keyword');

        $new_test->save();

        return redirect()->route('soal7.create')
            ->with('success',' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show()
    {

        $bab = Chapter::where([["subject_id", "=", 4], ["grade_id", "=", 1]])->get();

        $dailyTests = DailyTest::all();
        return view('kelas7.soal.show',compact('dailyTests','bab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DailyTest $dailyTest
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('kelas7.soal.edit')->with([
            'dailyTest' => DailyTest::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update($dailyTest)
    {

        $dailyTest = DailyTest::findOrFail($dailyTest);

        $dailyTest->update(request()->all());

        return $dailyTest;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyTest $dailyTest)
    {
        $dailyTest->delete();
        return redirect()->route('soal7.index')->with('success','delete sukes cuy');
    }

    public function showSubject(DailyTest $dailyTest){
        return view('kelas7.soal.create')->with('dailyTest', $dailyTest);
    }
}
