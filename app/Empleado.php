<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['id','nombre', 'telefono'];
    protected $hidden = ['created_at', 'updated_at',];

  
}
