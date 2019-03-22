<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
//use App\Order;
//use App\User;
class AdminController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
             return view('admin.index');
    }
    public function showtables()
    {
    	        $users = User::orderBy('id', 'desc')->paginate(10);
              $orders=Order::all();
              $contacts=Contact::all();
             return view('admin.tables',compact('users','orders','contacts'));
    }
}
