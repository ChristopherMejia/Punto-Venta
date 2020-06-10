<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleVentas extends Model
{
    protected $table = 'detalle_ventas';

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    public function venta(){
        return $this->belongsTo(Venta::class);
    }
}
