<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleDevolucion extends Model
{
    
    public function devoluciones(){
        return $this->belongsTo(Devolucion::class);
    }
}
