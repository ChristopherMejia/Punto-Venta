@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Detalle Venta </strong></h1>
        </div>
        <div class ="btnSubmit1">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/devolucion">Back</a>
        </div>

    <div class = "table-venta border">
        <table class="table table-dark">
                <tr>
                    <th><span>Devolucion ID</span></th> 
                    <th><span>Producto ID</span></th>
                    <th><span>Cantidad</span></th>
                    <th><span>Motivo</span></th>
                </tr>
                <tr>
                    
                    @foreach($devolucion->detallesDevolucion as $detalle)
                    <tr>
                        <td>{{$detalle->devolucion_id}} </td>
                        <td><a href="/venta/producto/{{$detalle->producto_id}}">{{$detalle->producto_id}}</a></td>
                        <td>{{$detalle->cantidad}} </td>
                        <td>{{$detalle->motivo}} </td>
                    </tr>
                    @endforeach
                </tr>
        </table>
    </div>
    

@endsection