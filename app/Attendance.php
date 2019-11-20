<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'teacher_id', 'class_id', 'student_id', 'attendance_date', 'attendance_status',
    ];
}
