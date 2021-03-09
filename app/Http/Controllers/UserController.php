<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $videos = $this->userVideos(Auth::user()->id);
        $users = User::all();
        return view('user', compact('users', 'videos'));
    }


    public function userVideos($id)
    {
        $sql = ("SELECT videos.id, videos.route, videos.desc, videos.title, videos.created_at FROM videos WHERE videos.user_id = '$id'");
        $v = DB::select($sql);
        return $v;

    }

    public function showEdit($id){
        $users = User::where('id',$id)->first();

        return view('user-edit',compact( 'users'));
    }
    public function editUser(Request $request){
        $request = $request->all();
        DB::table('users')
            ->where('id', $request['id'])
            ->update(['name' => $request['name']]);
        return redirect()->route('profile');
        //return redirect()->route('user');
    }

}
