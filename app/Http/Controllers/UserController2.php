<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Role;
//use App\Permissions;
use DB;
use Input;
use Illuminate\Http\Request;
use App\User;
use Image;
use Session;
use Storage;

class UserController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
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
      $users = User::withTrashed()->orderBy('id', 'desc')->paginate(4);
      return view('testAdmin.manage.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
      $roles = Role::all();
      return view('testAdmin.manage.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */   
   public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users'
      ]);

      if (!empty($request->password)) {
        $password = trim($request->password);
      } else {
        # set the manual password
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $password = $str;
      }

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($password);
      $user->save();

      if ($request->roles) {
        $user->syncRoles($request->roles);
      }

      return redirect()->route('manageusers.show', $user->id)->with('message', 'User has been successfully added');
       ;
      // if () {
      //
      // } else {
      //   Session::flash('danger', 'Sorry a problem occurred while creating this user.');
      //   return redirect()->route('users.create');
      // }
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
      $roles = Role::all();
      $user = User::where('id', $id)->with('roles')->first();
      return view("testAdmin.manage.users.edit")->withUser($user)->withRoles($roles);
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
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,'.$id,

//        'phone'=>'unique:users'
      ]);

      $user = User::findOrFail($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->city = $request->city; 
      if ($request->password_options == 'auto') {
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $user->password = Hash::make($str);
      } elseif ($request->password_options == 'manual') {
        $user->password = Hash::make($request->password);
      }
      $user->save();

      $user->syncRoles($request->roles);
      return redirect()->route('manageusers.show', $id)->with('message', 'user has been successfully edited');
       ;

      // if () {
      //   return redirect()->route('users.show', $id);
      // } else {
      //   Session::flash('error', 'There was a problem saving the updated user info to the database. Try again later.');
      //   return redirect()->route('users.edit', $id);
      // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return back()->with('message', 'Successfully deleted!');
    }
    public function restore($id)
    {
       $user=User::onlyTrashed()->findOrFail($id);
       $user->restore();
       return back()->with('message', 'Successfully restored!');

    }
    public function deleteforever($id)
    {
       $user=User::onlyTrashed()->findOrFail($id);
       $user->forceDelete();
       return back()->with('message', 'Successfully deleted for ever!');

    }
}
