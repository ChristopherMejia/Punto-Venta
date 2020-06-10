<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    public function detalles()
    {
        return $this->hasMany(detalleVentas::class);
    }

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}

?>