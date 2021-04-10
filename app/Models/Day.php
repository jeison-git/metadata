<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

      //relacion uno a muchos
      public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
