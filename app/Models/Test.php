<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    //Relacion uno a muchos inversa
    public function asignature(){
        return $this->belongsTo('App\Models\Asignature');
    }
    //Relacion muchos a muchos 
    public function students(){
        return $this->belongsToMany('App\Models\Student');
    }
    
}
