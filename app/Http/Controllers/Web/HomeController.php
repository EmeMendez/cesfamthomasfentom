<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','DESC')->take(3)->get();
        return view('web.home',compact('posts'));
    }
}
