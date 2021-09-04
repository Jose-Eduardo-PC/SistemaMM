<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public function Materia() {
        return $this->HasMany('App/Models/Materia');
    }
    public function usuario_curso() {
        return $this->hasMany('App/Models/User_Curso');
    }
}
