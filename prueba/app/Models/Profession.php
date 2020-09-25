<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    // para usar la tabla con otro nombre
    // protected $table = 'nomNuevaTabla';

    // Para evitar que se cree el campo created_at y update_at, OJO se debe quitar $table->timestamps(); del seed de professions
    // public $timestamps = false;
}
