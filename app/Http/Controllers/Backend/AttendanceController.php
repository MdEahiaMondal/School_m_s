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

    public function index()
    {
        $students = Student::latest()->get();
        $classes = AllClass::latest()->get();
        $attendances = Attendance::latest()->get();
        return view('backend.pages.attendance.index', compact('students', 'classes', 'attendances'));
    }


    public function create()
    {
        $students = Student::latest()->get();
        $classes = AllClass::latest()->get();
        return view('backend.pages.attendance.create', compact('students', 'classes'));
    }



    public function store(Request $request)
    {
         $request->validate($this->AttendanceStoreValidator(), $this->CustomErrorMessage());

        $request['teacher_id'] = auth()->user()->id;


         Attendance::create($request->all());

         return redirect()->route('attendances.index')->with('success', 'Attendance Create Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
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
