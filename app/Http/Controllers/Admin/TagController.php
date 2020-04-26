<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Tag\TagStoreRequest;
use App\Http\Requests\Admin\Tag\TagUpdateRequest;
use Illuminate\Support\Str;
use App\Tag;
class TagController extends Controller
{

    public function __construct(){
        $this->middleware('permission:admin.tags.index')->only('index');
        $this->middleware('permission:admin.tags.show')->only('show');
        $this->middleware('permission:admin.tags.create')->only('create','store');
        $this->middleware('permission:admin.tags.edit')->only('edit','update');
        $this->middleware('permission:admin.tags.destroy')->only('destroy','restore');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name       = $request->get("name");
        $tag_status = $request->get('tag_status');
        $tags = Tag::orderBy('id','DESC')
                ->deleted($tag_status)
                ->name($name)  
                ->paginate(15);   
        
        return view('admin.tags.index',compact('tags','name','tag_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new Tag;
        return view('admin.tags.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        $tag = new Tag();
        $tag->name = ucfirst($request->get('name'));
        $tag->url = Str::slug($request->get('name'));
        $tag->save();
        return redirect()->route('admin.tags.index')
               ->with('info','Etiqueta <b>'. $tag->name .'</b> creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::withTrashed()->find($id);
        return view('admin.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag->update($request->validated());
        return redirect()->route('admin.tags.index')
               ->with('info','Etiqueta actualizada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        Tag::find($id)->delete();
        return back()->with('info','La etiqueta <b>'.$tag->name. '</b> ha sido eliminada con éxito');

    }

    public function restore($id){
        Tag::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.tags.index')->with('info','Etiqueta restaurada correctamente');
    }
}
