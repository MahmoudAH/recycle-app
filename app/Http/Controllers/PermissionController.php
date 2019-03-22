<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class PermissionController extends Controller
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
    public function index()
    {
    	/*
        if(!auth()->user()->hasRole('admin|creator|editor'))
        {
          return back()->with('message','Access Denied For That Action');
        }*/
        
        $permissions = Permission::all();
        return view('testAdmin.manage.permissions.index')->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	/*
        if(!auth()->user()->hasRole('admin|creator'))
        {
        return back()->with('message','Access Denied For That Action');
        }*/

        $roles = Role::get();
        return view('testAdmin.manage.permissions.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*
        if(!auth()->user()->hasRole('admin|creator'))
        {
        return back()->with('message','Access Denied For That Action');
        }*/

        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $permission = new Permission();
        $name = $request['name'];
        $permission->name = $name;

        $roles = $request['roles'];
        
        $permission->save();

        if (!empty($request['roles'])) {
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record

                $permission = Permission::where('name', '=', $name)->first();   
                $r->givePermissionTo($permission);
            }
        }

        return redirect()->route('testAdmin.manage.permissions.index')
            ->with('message',
             'Permission'. $permission->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('testAdmin.manage.permissions.show')->withPermission($permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	/*
        if(!auth()->user()->hasRole('admin|editor'))
        {
        return back()->with('message','Access Denied For That Action');
        }*/

        $permission = Permission::find($id);
        return view('testAdmin.manage.permissions.edit', compact('permission'));
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
    	/*
        if(!auth()->user()->hasRole('admin|editor'))
        {
        return back()->with('message','Access Denied For That Action');
        }*/

        $permission = Permission::findOrFail($id);

        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('permissions.show', $id)
            ->with('message',
             'Permission'. $permission->name.' updated!');
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
        
        /*
        if ($permission->name == "Administer roles & permissions") {
            return redirect()->route('permissions.index')
            ->with('message',
             'Cannot delete this Permission!');
        }*/
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')
            ->with('message',
             'Permission deleted!');
    }
    
}
