<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Image;
use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Http\Requests\Admin\Post\PostUpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts  = Post::orderBy('id','DESC')->paginate(15);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $post->category = new Category;
        $categories = Category::orderBy('name','ASC')->get();
        $tags = Tag::orderBy('name','ASC')->get();        
        return view('admin.posts.create',compact('post','categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = new Post;
        $post->user_id = auth()->user()->id;
        if($request->hasFile('image')){
            $post->image = Storage::disk('public')->put('images/post_main_images',$request->file('image'));
        }      
        $post->name = $request->get('name');
        $post->status = $request->get('status');
        $post->category_id = $request->get('category');
        $post->excerpt = $request->get('excerpt');
        $post->url = Str::slug($request->get('name'));
        $post->body = $request->get('body');
        $post->save();

        $post->tags = $request->input('tags'); 
        $post->tags()->sync($post->tags);

        foreach($request->images as $path) {
               $image = new Image;
               $image->path = $path->store('images/galery');
               $post->images()->save($image);                
        }
        return redirect()->route('admin.posts.index')
               ->with('info','El post <b>'. $post->name .'</b> ha sido creado con éxito');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $this->post = $post;
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post = $post;
        $categories = Category::orderBy('name','ASC')->get();
        $tags = Tag::orderBy('name','ASC')->get();        
        return view('admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->post = $post;
        if($request->hasFile('image')){
            $old_image = $post->image;
            $post->image = Storage::disk('public')->put('images/post_main_images',$request->file('image'));
            unlink(public_path() . '/'.$old_image);               
        }      
        $post->name         = $request->get('name');
        $post->status       = $request->get('status');
        $post->category_id  = $request->get('category');
        $post->excerpt      = $request->get('excerpt');
        $post->url          = Str::slug($request->get('name'));
        $post->body         = $request->get('body');
        $post->save();

        $post->tags         = $request->input('tags'); 
        $post->tags()->sync($post->tags);

        if($request->images){
            foreach($request->images as $path) {
                $image = new Image;
                $image->path = $path->store('images/galery');
                $post->images()->save($image); 
            }               
        }
        return redirect()->route('admin.posts.index')
               ->with('info','El post <b>'.$post->name.'</b> ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        unlink(public_path() . '/'.$post->image);
        foreach($post->images as $image) {
            unlink(public_path() . '/'.$image->path);            
        }                       
        Post::findOrFail($id)->delete();
        return redirect()->route('admin.posts.index')
             ->with('info','El post <b>'.$post->name.'</b> fue eliminado correctamente.');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function image($id)
    {
        $post = Post::findOrFail($id);
        return $post->image;

    }

    public function images($id)
    {
        $post = Post::findOrFail($id);
         return $post->images;     
        
    }
}
