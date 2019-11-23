<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'parnt_id', 'all_class_id', 'class_group_id', 'roll_number', 'phone', 'age', 'gender', 'date_of_birth', 'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function myClass()
    {
        return $this->belongsTo(AllClass::class,'all_class_id');
    }

    public function myClassGroup()
    {
        return $this->belongsTo(ClassGroup::class,'class_group_id');
    }


    public function parent()
    {
        return $this->belongsTo(Parnt::class,'parnt_id');
    }




}
