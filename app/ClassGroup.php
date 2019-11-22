<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
   protected $fillable = ['class_group_name', 'status'];



   public function Classes()
   {
       return $this->belongsToMany(AllClass::class)->withTimestamps();
   }

}
