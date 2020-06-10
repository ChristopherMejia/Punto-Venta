@extends('layouts.app')
@section('content')
    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Nueva Devolucion </strong></h1>
        </div>
    </div>
   
<div class="table-venta">
       
        <div class = "table-venta3 border">
        <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/devolucion">Back</a>            

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Empleado ID</th>
                    <th>Cliente ID</th>
                </tr>
            </thead>
                <tr>
                    @foreach($ventas as $venta)
                    <td><a href="/devolucion/empleado/{{$venta->id}}">{{$venta->empleado_id}}</a> </td>
                    <td><a href="/devolucion/cliente/{{$venta->id}}">{{$venta->cliente_id}}</a></td>
                    @endforeach
                  
                </tr>
        
        </table>
                
                <form action="/devolucion/guardar" method="POST">
                @csrf
                <div class ="dts-pro">
                    <label class="lbl-pro" for="date">Fecha</label>
                    <input class="form-control" name="date" type="text" value="{{ date('Y-m-d H:i:s') }} ">
                    
                    <label for="venta_id" class="lbl-pro" for="venta_id">Venta ID: </label>
                        @foreach ($ventas as $venta)
                        <input value="{{$venta->id}}" class="form-control" name="venta_id" type="text" readonly>
                        @endforeach 
                    
                </div>
                
                <div class = "dts-pro">   
                    <label for="empleado_select"class="lbl-pro">Empleado </label>
                    <select class="form-control" name="empleado_select">
                        @foreach ($empleados as $empleado)
                        <option value="{{$empleado->id}}">{{$empleado->id}}: {{$empleado->nombre}}</option>
                        @endforeach 
                    </select>
                    
                    <label for="producto_id" class="lbl-pro">Producto ID</label>
                    @foreach($venta->detalles as $detalles)
                    <input class="form-control" name="producto_id" value="{{$detalles->producto_id}}" readonly>
                    @endforeach
                </div>
            
                <div class = "dts-pro">   
                    
                <label for="cantidad" class="lbl-pro">Cantidad</label>
                @foreach($venta->detalles as $detalles)
                <input name="cantidad" class="form-control" type="number" value="{{$detalles->cantidad}}" max="{{$detalles->cantidad}}" min="0" >
                @endforeach
                
                <label class="lbl-pro" for="motivo">Motivo</label>
                <input class="form-control" type="text" name="motivo">
            </div>
            
            
            <div class="dts-pro">
                <input name="status" type="hidden" value="0">
            </div>
            
            <div class="dts-pro">
                <button class="btn btn-primary btn-block " type="submit" id="btnSubmit2">Submit</button>
            </div>
        </form>
    </div>
</div>
    
    @endsection