@extends('layouts.app')
@section('content')
    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Devolucion </strong></h1>
        </div>
    </div>


        <div class = "table-venta border">
        <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/venta">Back</a>
        
        <form action="/venta/devolucion/{{$venta->id}}" method="POST">
        @csrf
            <div class ="dts-pro">
                <label class="lbl-pro" for="date">Fecha</label>
                <input class="form-control" name="date" type="text" value="{{ date('Y-m-d H:i:s') }} ">

                <label for="venta_id">ID: </label>
                <input class="form-control" name="venta_id" type="text" value="{{$venta->id}}" >

            </div>

            <div class = "dts-pro">   
                <label for="empleado_select"class="lbl-pro">Empleado </label>
                <select class="form-control" name="empleado_select">
                    @foreach ($empleados as $empleado)
                    <option value="{{$empleado->id}}">{{$empleado->id}}: {{$empleado->nombre}}</option>
                    @endforeach 
                </select>
            </div>

            <div class="dts-pro">
                <input name="status" type="hidden" value="devolucion">
            </div>
           
        
            <button class="btn btn-primary btn-block " type="submit" id="btnSubmit2">Submit</button>
        </form>
        </div>
        
  

@endsection