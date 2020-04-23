<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Banner\BannerUpdateRequest;

class BannerController extends Controller
{

    public function __construct(){
        $this->middleware('permission:admin.banners.index')->only('index');
        $this->middleware('permission:admin.banners.show')->only('show');
        $this->middleware('permission:admin.banners.edit')->only('edit','update');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        return view('admin.banners.index',compact('banners'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.show',compact('banner'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdateRequest $request, $id)
    {
        $banner = Banner::findOrFail($id);
        if($request->hasFile('path')){
            $old_path = $banner->path;
            $banner->path = Storage::disk('public')->put('images/banners',$request->file('path'));
            unlink(public_path() . '/'.$old_path);               
        }      
        $banner->title        = $request->get('title');
        $banner->description  = $request->get('description');
        $banner->link         = $request->get('link');
       
        $banner->save();

        return redirect()->route('admin.banners.index')
               ->with('info','El banner ha sido actualizado exitosamente');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function image($id)
    {
        $banner = Banner::findOrFail($id);
        return $banner->path;

    }
}
