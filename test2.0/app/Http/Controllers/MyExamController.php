<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyExamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMyExam()
    {
        return view('myexam');
    }
    public function postMyExam(Request $request)
    {
        $arr = [
            'exam_name' => $request->exam_name,
            'exam_describe' => $request->exam_describe,
            'id' => \Auth::user()->id,   
        ];
        DB::table('exam')->insert($arr);
        return redirect()->back();
    }
    public function getCreateExam($id)
    {
        return view('createexam');
    }
}
