<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function detalles_producto()
    {
        return $this->hasMany(detalleVentas::class);
    }

}
