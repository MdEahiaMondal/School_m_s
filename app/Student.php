<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'parent_id', 'class_id', 'roll_number', 'phone', 'parent_phone', 'age', 'gender', 'date_of_birth', 'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Class()
    {
        return $this->belongsTo(AllClass::class);
    }




}
