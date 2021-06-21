<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $fillable = ['id','nombre', 'categoria', 'descripcion', 'precio'];
    protected $hidden = ['created_at', 'updated_at',];


    public function pedido(){

        return $this->hasMany('App\Pedido');
    }
}
