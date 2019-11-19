<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
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
            'name' => 'required',
        ]);

       $role =  Role::create(['name' => $request->name]);

      $role->syncPermissions($request->permission_id);

      return  redirect()->route('role.index')->with('success', 'Role create successfully');
    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
