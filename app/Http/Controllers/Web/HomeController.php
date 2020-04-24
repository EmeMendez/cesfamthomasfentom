<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Banner;
class HomeController extends Controller
{
    public function home(){

        $posts = Post::orderBy('created_at','DESC')->where('status','PUBLISHED')->take(3)->get();
        $banners = Banner::get();
        return view('web.home',compact('posts','banners'));
    }

}
