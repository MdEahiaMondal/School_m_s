<?php

namespace App\Http\Controllers\Backend;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class TeacherController extends Controller
{


    public function index()
    {
        $teachers  = Teacher::with('user')->latest()->get();
        return view('backend.pages.teacher.index', compact('teachers'));
    }


    public function create()
    {
        return view('backend.pages.teacher.create');
    }



    public function store(Request $request)
    {
        $request->validate($this->storeRules(), $this->validationErrorMessages());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $true = $user->teacher()->create($request->all());
        $user->assignRole('teacher');

        if ($true)
        {
            return redirect()->route('teacher.index')->with('success', 'Teacher create Successdully');
        }
        return redirect()->route('teacher.index')->with('error', 'Teacher does not create !');



    }


    protected function storeRules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
            'subject' => 'required',
            'education' => 'required',
            'address' => 'required',
        ];
    }


    protected function validationErrorMessages()
    {
        return [

        ];
    }


    public function edit(Teacher $teacher)
    {
        $roles = Role::latest()->get();
        return view('backend.pages.teacher.edit', compact('teacher','roles'));
    }


    public function update(Request $request, Teacher $teacher)
    {
       $request->validate($this->updateRules($teacher));

       $teacher->user()->update([
               'name' => $request->name,
               'email' => $request->email,
           ]);

       DB::table('model_has_roles')->where('model_id', $teacher->user->id)->delete(); // first delete old role

        $teacher->user->assignRole($request->role_name); // now new role assign

        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('success', 'Teacher update successfully !');

    }


    protected function updateRules($teacher)
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$teacher->user_id.',id',
            'phone' => 'required',
            'subject' => 'required',
            'education' => 'required',
            'address' => 'required',
        ];
    }



    public function destroy(Teacher $teacher)
    {
        DB::table('model_has_roles')->where('model_id', $teacher->user->id)->delete(); // first delete the role
       $teacher->user()->delete();
        return redirect()->route('teacher.index')->with('success', 'Teacher Deleted successfully !');
    }
}
