<?php

namespace App\Http\Controllers\Kelas7\Penjaskes;

use App\Chapter;
use App\DailyTest;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Penjaskes7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();

        return view('kelas7.Penjaskes.index',compact('chapters'));
    }

    public function showBab(){
        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();
        return view('kelas7.Penjaskes.soal',compact('chapters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {

        $chapters = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();
        $grades = Grade::all();
        $subjects = Subject::all();
        $data = array(
            'chapters'  => $chapters,
            'grades' => $grades,
            'subjects' => $subjects,
        );

        return view('kelas7.Penjaskes.create', $data);
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
        $new_test->subject_id = $request->get('subject_id');
        $new_test->grade_id = $request->get('grade_id');
        $new_test->question = $request->get('question');
        $new_test->answer = $request->get('answer');
        $new_test->keyword = $request->get('keyword');

        $new_test->save();

        return redirect()->route('kelas7.penjas.create')
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
        $bab = Chapter::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();

        $dailyTests = DailyTest::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();
        return view('kelas7.Penjaskes.show',compact('dailyTests','bab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit()
    {
//        $dailyTests = DailyTest::find($id);
//        $categories = Category::all();
        $dailyTests = DailyTest::where([["subject_id", "=", 6], ["grade_id", "=", 1]])->get();

        return view('kelas7.Penjaskes.edit', compact('dailyTests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        $request->validate([
//            'name' => 'required',
//            'detail' => 'required',
//        ]);
//
//        $product->update($request->all());
//
//        return redirect()->route('products.index')
//            ->with('success','Product updated successfully');
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
        return redirect()->route('kelas7.penjas.soal')->with('success delete soal');

    }
}
