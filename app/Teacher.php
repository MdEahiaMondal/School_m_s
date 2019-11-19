<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'phone', 'subject', 'education', 'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
