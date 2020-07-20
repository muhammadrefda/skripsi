<?php

namespace App\Http\Controllers\Kelas7\IPS;

use App\Chapter;
use App\DailyTest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DailyTestIPS7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $chapters = Chapter::where([["subject_id", "=", 1], ["grade_id", "=", 2]])->get();
        return view('kelas7.soal.index',compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
            return view('kelas7.soal.create');
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
     * @param $dailyTest
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dailyTest = DailyTest::findOrFail($id);

        return view('kelas7.IPS.edit', ['dailyTest' => $dailyTest]);
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
            ->route('kelas7.ips.soal.tampil')
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
        //
    }
}
