<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Parent\ParentStoreRequest;
use App\Http\Requests\Parent\parentUpdateRequest;
use App\Parnt;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ParntController extends Controller
{


    public function index()
    {
        $parents = Parnt::latest()->get();
        return view('backend.pages.parents.index', compact('parents'));
    }


    public function create()
    {
       return view('backend.pages.parents.create');
    }



    public function store(ParentStoreRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $true = $user->parent()->create($request->all());

        $user->assignRole('parent');

        if ($true)
        {
            return redirect()->route('parent.index')->with('success', 'Parent create Successdully');
        }
        return redirect()->route('parent.index')->with('error', 'Parent does not create !');

    }



    public function edit($id)
    {
        $roles = Role::latest()->get();
        $parnt = Parnt::findOrFail($id);
        return view('backend.pages.parents.edit', compact('parnt','roles'));
    }


    public function update(parentUpdateRequest $request, $id)
    {
        $parent = Parnt::findOrFail($id);

        $parent->user()->update([
            'name'  => $request->name,
            'email'  => $request->email,
        ]);
        $parent->update($request->all());

        DB::table('model_has_roles')->where('model_id', $parent->user->id)->delete(); // first delete old role

        $parent->user->assignRole($request->role_name); // now new role assign

        return redirect()->route('parent.index')->with('success', 'Parent Updated Successdully');

    }


    public function destroy($id)
    {
       $parnt = Parnt::findOrFail($id);

        DB::table('model_has_roles')->where('model_id', $parnt->user->id)->delete(); // first delete old role

        $parnt->user()->delete();

        return redirect()->route('parent.index')->with('success', 'Parent Deleted Successdully');


    }
}
