<?php

namespace App\Http\Controllers\Kelas8;

use App\Chapter;
use App\DailyTest;
use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class DailyTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

//        $dailyTests = DailyTest::all();
//        return view('kelas8.soal.index')
//            ->with(['dailyTests' => $dailyTests,]);
        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 2]])->get();
        return view('kelas8.soal.index',compact('chapters'));
    }

    public function showSubject(){
        $subjects = Subject::all();
        return view('kelas8.soal.create')->with(['subjects' => $subjects,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
            return view('kelas8.soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $dailyTest = DailyTest::create($request);
//        return redirect()
//            ->route('soal.index');
//               ->withSuccess("New Product with id {$product->id} was created");

//        $request->validate([
//
//            'name' => 'required',
//
//            'detail' => 'required',
//
//        ]);

        DailyTest::create($request->all());
        return redirect()->route('soal.index')
            ->with('success','Ulangan harian has ben created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
