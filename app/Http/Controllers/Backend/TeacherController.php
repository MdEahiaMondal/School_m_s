<?php

namespace App\Http\Controllers\Backend;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

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
        $request->validate($this->rules(), $this->validationErrorMessages());

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


    protected function rules()
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
