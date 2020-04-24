<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('permission:admin.categories.index')->only('index');
        $this->middleware('permission:admin.categories.show')->only('show');
        $this->middleware('permission:admin.categories.create')->only('create','store');
        $this->middleware('permission:admin.categories.edit')->only('edit','update');
        $this->middleware('permission:admin.categories.destroy')->only('destroy','restore');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name               = $request->get("name");
        $category_status    = $request->get("category_status");
        $categories         = Category::orderBy('id','DESC')
                                        ->deleted($category_status)
                                        ->name($name)
                                        ->paginate(15);
        return view('admin.categories.index',compact('categories','name','category_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category;
        return view('admin.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = new Category;
        $category->name = $request->get('name');
        $category->url = Str::slug($request->get('name'));
        $category->save();
        return redirect()->route('admin.categories.index')
        ->with('info','Categoría <b>'. $category->name .'</b> creada con éxito');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->validated());
        return redirect()->route('admin.categories.index')
               ->with('info','Categoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Category::find($id)->delete();
        return redirect()->route('admin.categories.index')
             ->with('info','Categoría <b>'.$category->name.'</b> eliminada con éxito');
    }

    public function restore($id){
        Category::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.categories.index')->with('info','Categoría restaurada con éxito');          
    }
}
