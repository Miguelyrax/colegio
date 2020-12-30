<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    //Relacion uno a muchos inversa
    public function lecciones(){
        return $this->belongsTo('App\Models\Lesson');
    }
}
