<?php

namespace App\Http\Controllers\Kelas9;

use App\Chapter;
use App\DailyTest;
use App\Http\Controllers\Controller;
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

        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 2]])->get();
        return view('kelas9.soal.index',compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('kelas9.soal.create');

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
//
//        DailyTest::create($request->all());
//        return redirect()->route('soal.index')
//            ->with('success','Ulangan harian has ben created.');


        $request->validate([

        ]);

        DailyTest::create($request->all());

        return redirect()->route('soal.index')
            ->with('success',' created successfully.');

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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, DailyTest $dailyTest)
    {

        $request->validate([
        ]);

        $dailyTest->update($request->all());

        return redirect()->route('soal.index')
            ->with('success',' updated successfully.');
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
