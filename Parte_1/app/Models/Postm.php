<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postm extends Model
{
    use HasFactory;

    protected $table = 'postm';
    protected $fillable = ['title', 'body']; //Lo agregamos para que se le puedan mandar datos masivamente y el método store pueda funcionar
    // protected $guarded = [] //Son los campos los cuales NO podemos llenar masivamente, por lo cual si no tenemos nada en el, significa que todos los datos en el formulario se pasan a la Base de Datos lo cual sigifica que si pasamos todos los datos con $request->all() dará error
}