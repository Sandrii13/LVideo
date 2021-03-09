<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['loader', 'admin']);
        $videos = Video::all();

        return view('index', compact('videos'));

    }
}
