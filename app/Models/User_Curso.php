<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Curso extends Model
{
    use HasFactory;
    public function usuario() {
        return $this->HasMany('App/Models/Usuario');
    }
    public function curso() {
        return $this->belongsTo('App/Models/Rol');
    }
}
