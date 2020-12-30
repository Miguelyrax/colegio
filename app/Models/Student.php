<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Relacionuno a muchos inversa
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    //Relacion muchos a muchos
    public function tests(){
        return $this->belongsToMany('App\Models\Test');
    }
}
