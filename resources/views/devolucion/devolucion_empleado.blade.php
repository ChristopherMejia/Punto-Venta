@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Datos Empleado </strong></h1>
        </div>
        <div class ="btnSubmit1">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/devolucion">Back</a>
        </div>

    <div class = "table-venta border">
        <table class="table table-dark">
                <tr>
                    <th><span>Empleado ID</span></th> 
                    <th><span>Nombre</span></th>
                    <th><span>Apellido</span></th>
                    <th><span>Email</span></th>
                </tr>
                <tr>
                
                    <tr>
                        <td>{{$empleado->id}}</td>
                        <td>{{$empleado->nombre}} </td>
                        <td>{{$empleado->apellido}} </td>
                        <td>{{$empleado->email}} </td>
                    </tr>
                </tr>
        </table>
    </div> 

@endsection