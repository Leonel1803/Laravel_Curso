<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postm extends Model
{
    use HasFactory;

    protected $table = 'postm';
    protected $fillable = ['title', 'body']; //Lo agregamos para que se le puedan mandar datos masivamente y el método store pueda funcionar
}
