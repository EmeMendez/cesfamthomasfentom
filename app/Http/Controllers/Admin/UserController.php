<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserStoreRequest;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('permission:admin.users.index')->only('index');
        $this->middleware('permission:admin.users.show')->only('show');
        $this->middleware('permission:admin.users.create')->only('create','store');
        $this->middleware('permission:admin.users.edit')->only('edit','update');
        $this->middleware('permission:admin.users.destroy')->only('destroy','restore');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name        = $request->get("name");
        $user_status = $request->get('user_status');
        $users       = User::orderBy('id','DESC')
                            ->deleted($user_status)
                            ->name($name)
                            ->paginate(15);
        return view('admin.users.index',compact('users','name','user_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user           = new User;
        $roles          = Role::get();
        $permissions    = Permission::get();
        return view('admin.users.create',compact('user','roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user  = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->route('admin.users.index')
                         ->with('info','Usuario "'. $user->name .'" creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::withTrashed()->find($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
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
        $user = User::find($id);
        $user->name = $request->get('name');
        if($user->email != $request->get('email')){
            $user->email_verified_at = null;
        }
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('admin.users.index')
               ->with('info','Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        User::find($id)->delete();
        return redirect()->route('admin.users.index')
             ->with('info','Usuario <b>'.$user->name.'</b> eliminado con éxito');
    }


    public function restore($id){
        User::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.users.index')->with('info','Usuario restaurado con éxito');
    }


}
