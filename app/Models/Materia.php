<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    public function tema() {
        return $this->HasMany('App/Models/Tema');
    }

    public function curso() {
        return $this->belongsToMany('App/Models/Curso');
    }
    
}
