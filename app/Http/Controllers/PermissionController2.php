<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
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
    public function index()
    {
      $permissions = Permission::all();
      return view('testAdmin.manage.permissions.index')->withPermissions($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('testAdmin.manage.permissions.create');
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
          'display_name' => 'required|max:255',
          'name' => 'required|max:255|alphadash|unique:permissions,name',
          'description' => 'sometimes|max:255'
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        
        return redirect()->route('permissions.index')->with('message', 'Permission has been successfully added');
       
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
      $permission = Permission::findOrFail($id);
      return view('testAdmin.manage.permissions.edit')->withPermission($permission);
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
        'display_name' => 'required|max:255',
        'description' => 'sometimes|max:255'
      ]);
      $permission = Permission::findOrFail($id);
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();

      Session::flash('success', 'Updated the '. $permission->display_name . ' permission.');
      return redirect()->route('permissions.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $permission=Permission::findOrFail($id);
      $permission->delete();
      return back()->with('message', 'Permission has been successfully deleted');
    }
}
 -->