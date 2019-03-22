<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Contact;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TestAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {    
      // Role::create(['name' => 'creator']);
       //Permission::create(['name' => 'edit order']);
        /*$role= Role::findById(1);
        $permission=Permission::findById(1);
        //$role->givePermissionTo($permission);*/
       // auth()->user()->givePermissionTo('edit user');
        //auth()->user()->assignRole('admin');
        //return auth()->user()->getAllPermissions();
        //return User::role('writer')->get();
         //return User::permission('edit post')->get();
    	$users = User::orderBy('id', 'desc')->paginate(10);
        $orders=Order::all();
        $contacts=Contact::all();
        return view('testAdmin.admin',compact('users','orders','contacts'));
    }

    public function order()
    {    

        $users = User::orderBy('id', 'desc')->paginate(10);
        $orders=Order::all();
        $contacts=Contact::all();
        return view('testAdmin.order',compact('users','orders','contacts'));
    }

    public function contact()
    {    

        $users = User::orderBy('id', 'desc')->paginate(10);
        $orders=Order::all();
        $contacts=Contact::all();
        return view('testAdmin.contact',compact('users','orders','contacts'));
    }
}
