<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    protected $table = 'devolucions';

    public function detallesDevolucion()
    {
        return $this->hasMany(DetalleDevolucion::class);
    }

    public function empleados(){
        return $this->hasMany( Empleado::class);
    }

    public function ventas(){
        return $this->hasMany( Venta::class);
    }

}
