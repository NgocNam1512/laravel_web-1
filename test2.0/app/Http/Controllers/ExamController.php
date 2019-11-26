<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application exam list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getExam()
    {
        $exams = DB::table('exam')->get();
        return view('exam',['exams'=>$exams]);
    }
}
