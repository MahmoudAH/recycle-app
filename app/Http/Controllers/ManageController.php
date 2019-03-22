<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class ManageController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return redirect()->route('manage.dashboard');
    }

    public function dashboard()
    {
      return view('admin.index');
    }
    public function manageorders(){
    	$orders=Order::all();
    	return view('admin.manage.manageorders',compact('orders'));
    }
}
