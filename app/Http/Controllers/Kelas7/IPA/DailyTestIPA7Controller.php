<?php

namespace App\Http\Controllers\Kelas7\IPA;

use App\Chapter;
use App\DailyTest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DailyTestIPA7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $chapters = Chapter::where([["subject_id", "=", 4], ["grade_id", "=", 1]])->get();
        return view('kelas7.IPA.show',compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
            return view('kelas7.IPA.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DailyTest::create($request->all());

        return redirect()->route('ipa.index')
            ->with('success',' created successfully.');
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
