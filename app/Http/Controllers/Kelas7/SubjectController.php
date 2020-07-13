<?php

namespace App\Http\Controllers\Kelas7;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('kelas7.mata_pelajaran.index')
            ->with(['subjects' => $subjects,]);
    }
}
