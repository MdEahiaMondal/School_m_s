<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parnt extends Model
{
    protected $fillable = [
        'phone',  'job', 'address', 'age', 'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
