@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Ventas Empleado </strong></h1>
        </div>
        <div class ="btnSubmit1">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/venta/desplegar">Back</a>
        </div>

    <div class = "table-venta border">
        <table class="table table-dark">
                <tr>
                    <th><span>Venta ID</span></th> 
                    <th><span>Empleado ID</span></th>
                    <th><span>Metodo Pago</span></th>
                    <th><span>Status</span></th>
                    <th><span>Fecha</span></th>
                </tr>
                <tr>
                    
                    @foreach($cliente->ventas as $venta)
                    <tr>
                        <td>{{$venta->id}}</td>
                        <td>{{$venta->empleado_id}} </td>
                        <td>{{$venta->metodo_pago}} </td>
                        <td>{{$venta->status}} </td>
                        <td>{{$venta->date}} </td>
                    </tr>
                    @endforeach
                </tr>
        </table>
    </div> 

@endsection