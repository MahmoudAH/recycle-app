<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use DB;
use App\User;
use Image;
use Illuminate\Support\Facades\Input;
use Session;
use Storage;
use Auth;
class UserProfileController extends Controller
{
	 public function profile()
    {
      $user = Auth::user();

        return view('userprofile',compact('user',$user));
    }
    public function update(Request $request, $id)
    {
//    	dd($request->all());

    
      $this->validate($request, [
      'name' => 'max:255',
      'email' => 'email|unique:users,email,'.$id,
      //'city'=> 'required',
      'phone' => 'regex:/(01)[0-9]{9}/|size:11',
      'password' => 'string|min:6|confirmed',

          ]);
      $user = User::findOrFail($id);
      $user->name = $request->name;
      $user->email = $request->email;
       $user->phone = $request->phone;
        $user->city = $request->city;

        if(!empty($request->input('password'))) {
        $password = Hash::make($request->input('password'));
        $user->password = $password;
        $user->save();
    }
/*
        if ($request->file('avatar')){
        $avatar = Input::file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalName();
        $path = public_path('images/' . $filename);
       Image::make($avatar->getRealPath())->resize(100,100)->save($path);
        $user = Auth::user();
        $user->avatar = $filename;
             $user->save();
 */
       $user->save();
 

return back()->with('message', 'Successfully updated!');

     
    }
    /*
     public function update_avatar(Request $request, $id)
    {
//      dd($request->all()); 
      $this->validate($request, [
               'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 

     // $user = User::findOrFail($id);

     /*
        if ($request->file('avatar')){
        $avatar = Input::file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalName();
        $path = public_path('images/' . $filename);
       Image::make($avatar->getRealPath())->resize(100,100)->save($path);
        $user = Auth::user();
        $user->avatar = $filename;
             $user->save();
 *
        if ($request->file('avatar')){
        $avatar = Input::file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalName();
        $path = public_path('images/' . $filename);
       Image::make($avatar->getRealPath())->resize(100,100)->save($path);
        $user = Auth::user();
        $user->avatar = $filename;
      // $user->update(['avatar'=>"/images/{$filename}"]);
        $user->save();
      }


     
return back()->with('message', 'Successfully updated!');
//      return view('/profile', array('user' => Auth::user()) );

     
    }
*/

     public function update_avatar(Request $request)
    {
//      dd($request->all()); 
      $this->validate($request, [
               'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        if ($request->file('avatar')){
        $avatar = Input::file('avatar');
        $filename =time() . '.' . $avatar->getClientOriginalName();
        $path = public_path('images/' . $filename);
       Image::make($avatar->getRealPath())->resize(300,300)->save($path);
        $user = Auth::user();
        $user->avatar = $filename;
        //$user->update(['avatar'=>"/images/{$filename}"]);

        $user->save();
      }


     
return back()->with('message', 'Image Successfully updated!');
//      return view('/profile', array('user' => Auth::user()) );

     
    }



}
