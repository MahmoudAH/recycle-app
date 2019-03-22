<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_avatar(Request $request){

      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        $path = public_path('images/' . $filename);
        Image::make($image->getRealPath())->resize(100,100)->save($path);
        $user = Auth::user();
        $user->avatar = 'images/' . $filename;
        $user->save();
      }

      return view('profile', array('user' => Auth::user()) );

    }

    public function dashboard(){
      return view('admin.index');
    }

    public function index()
    {
    	if(!auth()->user()->hasRole('admin|creator|editor'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}

    	$users = User::all();

    	return view('testAdmin.manage.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	if(!auth()->user()->hasRole('admin|creator'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}
    	$roles = Role::get();
    	return view('testAdmin.manage.users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	if(!auth()->user()->hasRole('admin|creator'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}

    	$this->validate($request, [
    		'name'=>'required|max:120',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:6|confirmed'
    	]);

    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$password = trim($request->password);
    	$user->password = Hash::make($password);
    	$user->save();
    	$roles = $request['roles'];

    	if (isset($roles)) {

    		foreach ($roles as $role) {
    			$role_r = Role::where('id', '=', $role)->firstOrFail();
    			$user->assignRole($role_r);
    		}
    	}

    	return redirect()->route('users.index')
    	->with('message',
    		'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$user = User::where('id', $id)->with('roles')->first();
        
        return view("testAdmin.manage.users.show")->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	if(!auth()->user()->hasRole('admin|editor'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}

    	$user = User::findOrFail($id);
    	$roles = Role::get();

    	return view('testAdmin.manage.users.edit', compact('user', 'roles'));
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
    	if(!auth()->user()->hasRole('admin|editor'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}

    	$user = User::findOrFail($id);
    	$this->validate($request, [
    		'name'=>'required|max:120',
    		'email'=>'email|unique:users,email,'.$id,

    	]);

        //$input = $request->only(['name', 'email', 'password']);
    	$user = User::findOrFail($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$password = $request->password;
    	if (isset($password)){
    		$user->password = Hash::make($password);
    	}
    	$roles = $request['roles'];
    	$user->save();

    	if (isset($roles)) {
    		$user->roles()->sync($roles);
    	}
    	else {
    		$user->roles()->detach();
    	}
    	return redirect()->route('manageusers.show')
    	->with('message',
    		'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if(!auth()->user()->hasRole('admin'))
    	{
    		return back()->with('message','Access Denied For That Action');
    	}
    	$user = User::findOrFail($id);
    	$user->delete();

    	return redirect()->route('manageusers.index')
    	->with('message',
    		'User successfully deleted.');
    }
}
