<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\User;
use App\Models\Video;

class ScoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $scores = Score::all();
        $videos= Video::all();
        return view('index',compact('users','videos','scores'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Score::create(
            ['score'=>$request->rating,
                'user'=>$request->user_id,
                'video'=>$request->video_id,
            ]);
        return redirect()->route('score.index');
    }


    public function show($id)
    {
        //
    }

    public function delete($id){
        //
    }

    public function edit(Request $request){
        //
    }


}
