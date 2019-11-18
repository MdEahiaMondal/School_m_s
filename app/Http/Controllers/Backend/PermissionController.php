<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.index', compact('permissions'));
    }


    public function create()
    {
        return  view('backend.pages.permission.create');
    }



    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required|unique:permissions',
       ]);

        Permission::create(['name' => $request->name]);
        return redirect()->back()->with('success', 'New ! Permission create Successfully !');

    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit', compact('permission'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'  => 'required|unique:permissions,name,'.$id.',id',
        ]);

        Permission::findOrFail($id)->update($request->all());
        return redirect()->route('permission.index')->with('success', 'Permission Update Successfully !');

    }


    public function destroy($id)
    {
       Permission::findOrFail($id)->delete();
        return redirect()->route('permission.index')->with('success', 'Permission Deleted Successfully !');
    }


}
