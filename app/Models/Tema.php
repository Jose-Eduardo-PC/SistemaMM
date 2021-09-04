<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    public function actividades() {
        return $this->hasMany('App/Models/Actividades');   
    }
    public function materia() {
        return $this->belongsTo('App/Models/Materia');   
    }
    public function evaluacion() {
        return $this->hasOne('App/Models/Evaluacion');
}
}
