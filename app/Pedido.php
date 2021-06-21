<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['id','contenido', 'total', 'mesa', 'alimento_id'];
    protected $hidden = ['created_at', 'updated_at',];


    public function alimento()
    {
        return $this->belongsTo('App\Alimento', 'alimento_id', 'id' );
    }

}
