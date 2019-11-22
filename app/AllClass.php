<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllClass extends Model
{
    protected $fillable = [
        'name', 'note',
    ];

    public function srudents()
    {
        return $this->hasMany(User::class);
    }

    public function classGroup()
    {
        return $this->belongsToMany(ClassGroup::class);
    }

}
