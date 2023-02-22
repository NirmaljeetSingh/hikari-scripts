<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
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
    public function index()
    {
        $allBlogs = Blog::get();
        $games = Blog::where('type','games')->inRandomOrder()->limit(3)->get();
        $manga = Blog::where('type','manga')->inRandomOrder()->limit(3)->get();
        $anime = Blog::where('type','anime')->inRandomOrder()->limit(3)->get();
        $writersPen = Blog::where('type','writers pen')->get();
        return view('pages.home',[
            'allBlogs' => $allBlogs,
            'games' => $games,
            'manga' => $manga,
            'anime' => $anime,
            'writersPen' => $writersPen
        ]);
    }
}
