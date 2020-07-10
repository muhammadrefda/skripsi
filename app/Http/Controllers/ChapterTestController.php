<?php

namespace App\Http\Controllers;

use App\DailyTest;
use App\Chapter;
use Illuminate\Http\Request;

class ChapterTestController extends Controller
{
//    public function index($chapter_id)
//    {
//        $dailyTests = DailyTest::where('chapter_id', $chapter_id)->get();
//        return view('kelas7.soal.index', compact('dailyTests', 'chapter_id'));
//    }

    public function create($chapter_id)
    {
        return view('kelas7.soal.create', compact('chapter_id'));
    }

    public function store(Request $request, Chapter $chapter_id )
    {
        DailyTest::create($request->all() + ['chapter_id' => $chapter_id]);
        return redirect()->route('bab7.soal7.index', $chapter_id);
//        $dailyTest = DailyTest::create();
//
//        $chapter
    }

//    public function edit($chapter_id, DailyTest $dailyTest)
//    {
//        return view('kelas7.soal.edit', compact('chapter_id', 'dailyTest'));
//    }

//    public function update($chapter_id, Request $request, DailyTest $dailyTest)
//    {
//        $dailyTest->update($request->all());
//        return redirect()->route('bab7.soal7.index', $chapter_id);
//    }

//    public function show($chapter_id, DailyTest $dailyTest)
//    {
//        return view('kelas7.soal.show', compact('chapter_id', 'dailyTest'));
//    }

//    public function destroy($chapter_id, DailyTest $dailyTest)
//    {
//        $dailyTest->delete();
//        return redirect()->route('bab7.soal7.index', $chapter_id);
//    }
}
