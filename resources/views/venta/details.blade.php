@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Detalle Venta </strong></h1>
        </div>
        <div class ="btnSubmit1">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/venta/desplegar">Back</a>
        </div>

    <div class = "table-venta border">
        <table class="table table-dark">
                <tr>
                    <th><span>Producto ID</span></th> 
                    <th><span>Precio</span></th>
                    <th><span>Cantidad</span></th>
                    <th><span>Fecha</span></th>
                </tr>
                <tr>
                    
                    @foreach($venta->detalles as $detalles)
                    <tr>
                        <td><a href="/venta/producto/{{$detalles->producto_id}}">{{$detalles->producto_id}}</a></td>
                        <td>{{$detalles->precio}} </td>
                        <td>{{$detalles->cantidad}} </td>
                        <td>{{$detalles->date}} </td>
                    </tr>
                    @endforeach
                </tr>
        </table>
    </div>
    

@endsection