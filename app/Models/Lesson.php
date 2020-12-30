<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function sections(){
        return $this->belongsTo('App\Models\Section');
    }
    //Relacion uno a muchos
    public function recursos(){
        return $this->hasMany('App\Models\Portfolio');
    }
}
