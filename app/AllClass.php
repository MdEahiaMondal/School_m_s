<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllClass extends Model
{
    protected $fillable = [
        'name', 'note',
    ];

    public function srudent()
    {
        return $this->hasMany(Student::class);
    }

}
