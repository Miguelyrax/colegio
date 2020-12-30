<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignature extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function curso(){
        return $this->belongsTo('App\Models\Course');

    }
    public function teacher(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion uno a muchos
    public function sections(){
        return $this->hasMany('App\Models\Section');
    }
    public function tests(){
        return $this->hasMany('App\Models\Test');
    }
}
