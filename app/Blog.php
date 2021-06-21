<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['id','titulo', 'contenido'];
    protected $hidden = ['created_at', 'updated_at',];
}
