<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{


    public function __construct()
    {
        $this->middleware('role:admin');
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::latest()->get();
        return view('backend.pages.role.index', compact('roles'));
    }


    public function create()
    {
        $permisstions = Permission::all();
        return  view('backend.pages.role.create', compact('permisstions'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:roles',
        ]);

       $role =  Role::create(['name' => strtolower($request->name)]);

      $role->syncPermissions($request->permission_id);

      return  redirect()->route('role.index')->with('success', 'Role create successfully');
    }



    public function show($id)
    {
        return view('backend.pages.errorPage.404');
    }



    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::latest()->get();
        return view('backend.pages.role.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name,'.$id.',id',
        ]);

        $role =  Role::findOrFail($id);
        $role->name = strtolower($request->name);
        $role->save();

        $role->syncPermissions($request->permission_id);

        return  redirect()->route('role.index')->with('success', 'Role Updated successfully');
    }



    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return  redirect()->route('role.index')->with('success', 'Role Deleted successfully');
    }
}
