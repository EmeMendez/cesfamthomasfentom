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
        $this->middleware('permission:admin.posts.index')->only('index');
        $this->middleware('permission:admin.posts.show')->only('show');
        $this->middleware('permission:admin.posts.create')->only('create','store');
        $this->middleware('permission:admin.posts.edit')->only('edit','update');
        $this->middleware('permission:admin.posts.destroy')->only('destroy','restore');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name       = $request->get("name");
        $status     = $request->get("status");
        $category   = $request->get("category");
        $post_status= $request->get("post_status");

        $categories = Category::withTrashed()->orderBy('name','ASC')->get();
        $posts      = Post::orderBy('id','DESC')
                           ->deleted($post_status)
                           ->name($name) 
                           ->status($status) 
                           ->category($category)
                           ->admin()
                           ->paginate(15);   
        
        return view('admin.posts.index',compact('posts','categories','name','status','category','post_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post           = new Post;
        $post->category = new Category;
        $categories     = Category::orderBy('name','ASC')->get();
        $tags           = Tag::orderBy('name','ASC')->get();    

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
        $post = Post::withTrashed()->find($id);
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
        $this->authorize('pass',$post);
        $categories = Category::withTrashed()->orderBy('name','ASC')->get();
        $tags = Tag::withTrashed()->orderBy('name','ASC')->get();        
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
        // unlink(public_path() . '/'.$post->image);
        // foreach($post->images as $image) {
        //     unlink(public_path() . '/'.$image->path);            
        // }                       
        Post::findOrFail($id)->delete();
        return redirect()->route('admin.posts.index')
             ->with('info','El post <b>'.$post->name.'</b> fue eliminado correctamente.');
    }
    /**
     * Restore the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Post::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.posts.index')->with('info','Post restaurado con éxito');           
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
