<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
   protected $fillable = ['class_id', 'status'];



   public function Class()
   {
       return $this->belongsToMany(AllClass::class);
   }

}
