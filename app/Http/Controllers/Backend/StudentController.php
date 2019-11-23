<?php

namespace App\Http\Controllers\Backend;

use App\AllClass;
use App\ClassGroup;
use App\Http\Requests\Student\StudentRequest;
use App\Parnt;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:student show|student create|student edit|student delete', ['only' => ['index','show']]);
        $this->middleware('permission:student create')->only('create');
        $this->middleware('permission:student edit')->only(['edit','update']);
        $this->middleware('permission:student delete')->only('destroy');
    }


    public function index()
    {
        $students = Student::latest()->get();

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

       $roll = $request['roll_number'] = rand(1, 999999999);

        $error = Student::where('roll_number', $roll)->first();
        if (isset($error))
        {
            return back()->with('error', 'The Role number Fillup Your Company');
        }


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


    public function destroy(Student $student)
    {
        DB::table('model_has_roles')->where('model_id', $student->user->id)->delete(); // first delete old role
      $student->user()->delete();
        return redirect()->route('students.index')->with('success', 'Student Updated Successfully !');
    }



    public function getClassGroup(Request $request)
    {
        $Class_id = $request->get('options_id');


        $allClss = AllClass::where('id', $Class_id)->first();


        $allClssGroup = $allClss->classGroups;

        $output = '';
        foreach ($allClssGroup as $group)
        {

            $output .= '<option value="'.$group->id.'">'.$group->class_group_name.'</option>';
        }

        return $output;

    }

}
