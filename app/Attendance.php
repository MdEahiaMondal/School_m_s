<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'teacher_id', 'class_id', 'student_id', 'attendance_date', 'attendance_status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function Class()
    {
        return $this->belongsTo(AllClass::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'teacher_id'); // it is attendances table's teacher_id
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }



}
