<?php

namespace App\Http\Controllers\Backend;

use App\AllClass;
use App\Http\Requests\Student\StudentRequest;
use App\Parnt;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::with('Class')->latest()->get();
       return view('backend.pages.students.index', compact('students'));
    }


    public function create()
    {
        $classes = AllClass::latest()->get();
        $parents = Parnt::latest()->get();
       return view('backend.pages.students.create', compact('classes','parents'));
    }


    public function store(StudentRequest $request)
    {
       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);

        $user->assignRole('student');

       $user->student()->create($request->all());


       return redirect()->route('students.index')->with('success', 'Student create Successfully !');
    }


    public function show(Student $student)
    {
        $parents = Parnt::latest()->get();
        $classes = AllClass::latest()->get();
       return view('backend.pages.students.profile', compact('student','parents','classes'));
    }


    public function edit(Student $student)
    {
        //
    }


    public function update(StudentRequest $request, Student $student)
    {
            $user = [
           'name' => $request->name,
            'email' => $request->email,
            ];

            if (isset($request->passqord)){
                $user['password'] = Hash::make($request->password);
            }
        $student->user()->update($user);


        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
