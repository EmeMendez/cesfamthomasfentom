<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $url
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $post = Post::where('url',$url)->first();
        return view('posts.show',compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $url
     * @return \Illuminate\Http\Response
     */
    public function category($url)
    {
        // $category = Category::where('url',$url)->pluck('id')->first();
        $category = Category::where('url',$url)->first();
        $posts = Post::where('category_id',$category->id)
                 ->where('status','PUBLISHED')  
                 ->orderBy('id','DESC')
                 ->paginate(10);
        return view('posts.category',compact('posts','category'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $url
     * @return \Illuminate\Http\Response
     */    
    public function tag($url)
    {
        $posts = Post::whereHas('tags',function($query) use($url){

                $query->where('url',$url);

                 })
                 ->where('status','PUBLISHED')  
                 ->orderBy('id','DESC')
                 ->paginate(10);
        return view('posts.tag',compact('posts'));       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
