<?php

namespace App\Http\Controllers\Backend;

use App\AllClass;
use App\Attendance;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:attendance show|attendance create|attendance edit|attendance delete', ['only' => ['index','show']]);
        $this->middleware('permission:attendance create')->only('create');
        $this->middleware('permission:attendance edit')->only(['edit','update']);
        $this->middleware('permission:attendance delete')->only('destroy');
    }



    public function index()
    {

        if (auth()->user()->hasRole('admin'))
        {
            $attendances = Attendance::latest()->get();
        }else{
            $attendances = Attendance::where('teacher_id', auth()->user()->id)->latest()->get();
        }

        return view('backend.pages.attendance.student.index', compact('attendances'));
    }


    public function create()
    {
        $students = Student::latest()->get();
        $classes = AllClass::latest()->get();
        return view('backend.pages.attendance.student.create', compact('students', 'classes'));
    }



    public function store(Request $request)
    {
         $request->validate($this->AttendanceStoreValidator(), $this->CustomErrorMessage());


         $existAttendance = Attendance::where([
             'teacher_id' => \auth()->user()->id,
             'class_id' => $request->class_id,
             'student_id' => $request->student_id,
             'attendance_date' => $request->attendance_date,
         ])->first();

        if (isset($existAttendance))
        {
            return back()->with('error', 'Attendance alredy taken');
        }


        $request['teacher_id'] = auth()->user()->id;


         Attendance::create($request->all());

         return redirect()->route('attendances.student.index')->with('success', 'Attendance Create Successfully !');
    }


    public function show(Attendance $attendance)
    {
        return view('backend.pages.errorPage.404');
    }



    public function edit(Attendance $attendance)
    {
        $students = Student::latest()->get();
        $classes = AllClass::latest()->get();
        return view('backend.pages.attendance.student.edit', compact('attendance', 'students', 'classes'));
    }


    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
                'student_id' => 'required|numeric',
                'class_id' => 'required|numeric',
                'attendance_status' => 'required|boolean',
                'attendance_date' => 'required|date',
        ]);

        $existAttendance = Attendance::where([
            'teacher_id' => \auth()->user()->id,
            'class_id' => $request->class_id,
            'student_id' => $request->student_id,
        ])->where('id', '!=', $attendance->id)
            ->first();

        if (isset($existAttendance)){
            return back()->with('error', 'Attendance alredy taken');
        }

        $request['teacher_id'] = auth()->user()->id;

        $attendance->update($request->all());

        return redirect()->route('attendances.student.index')->with('success', 'Attendance Updated Successfully !');

    }


    public function destroy(Attendance $attendance)
    {
       $attendance->delete();
        return redirect()->route('attendances.student.index')->with('success', 'Attendance Deleted Successfully !');
    }

    private function AttendanceStoreValidator()
    {
        return [
            'student_id' => 'required|numeric',
            'class_id' => 'required|numeric',
            'attendance_status' => 'required|boolean',
            'attendance_date' => 'required|date',
        ];
    }


    public function CustomErrorMessage()
    {
        return [
            'student_id.required' => 'Student field Required',
            'class_id.required' => 'Class field Required',
        ];
    }

}
