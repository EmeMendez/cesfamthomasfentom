<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function news(Request $request){
        $search = $request->get('search');
        $posts = Post::name($search)->orderBy('created_at','DESC')->paginate(7);
        return view('web.fenton.news',compact('posts','search'));
    }

    public function category($url){
        $category = Category::where('url',$url)->first();
        $posts = Post::where('category_id',$category->id)
                     ->where('status','PUBLISHED')
                     ->orderBy('created_at','DESC')
                     ->paginate(7);

        return view('web.fenton.news',['posts' => $posts, 'title'=> $category->name]);
    }
    public function tag($url){
        $tag = Tag::where('url',$url)->first();
        $posts = Post::whereHas('tags',function($query) use($url){
                            $query->where('url',$url);
                        })
                      ->where('status','PUBLISHED')
                      ->orderBy('created_at','DESC')
                      ->paginate(7);
        return view('web.fenton.news',['posts' => $posts, 'title'=> $tag->name]);
    }


}
