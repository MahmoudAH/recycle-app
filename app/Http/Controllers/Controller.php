<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex()
    {
        return view('index');
    }
    
    public function getAuthorPage()
    {
        return view('manager');
    }

    public function getAdminPage()
    {
        $users = User::all();
        //return view('admin', ['users' => $users]);
        $orders = Order::all();
        return view('admin.index', compact('orders','users'));
    
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_NormalUser']) {
            $user->roles()->attach(Role::where('name', 'NormalUser')->first());
        }
        if ($request['role_Manager']) {
            $user->roles()->attach(Role::where('name', 'Manager')->first());
        }
        if ($request['role_Admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}

