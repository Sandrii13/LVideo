<?php


namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /*$this->middleware('role:loader');*/
    }
    public function index(Request $request)
    {
        $videos = Video::all();
        return view('index', compact('videos'));
    }

    public function store(Request $request){
        $users = User::all();
        foreach($users as $user){
            if(Auth::user()->name == $user['name']){
                $userID = $user['id'];
            }
        }

        $path = $request->file('video')->store('videos', 'public');

        $videos = Video::all();
         Video::create(
            ['title'=>$request->title,
                'desc'=>$request->desc,
                'route'=>$path,
                'user_id'=>$userID
            ]);

        return redirect()->route('home');
    }
    public function show($id){
       $video = Video::find($id);
       $users = $video->user;
       return view('video-page',compact( 'video', 'users'));
    }

}
