@extends('layouts.app')
@section('content')

   
        <div>
            <h1 class ="title-display"><strong> Carrito </strong> </h1>
            
        </div>

    
        <div class="name-dtl" >
            <h2 class="name">{{$producto->nombre}}</h2>
            <a class="back btn btn-outline-primary" id="btnSubmit1" href="/venta">Back</a>
        </div>

    <form action="/venta/save" method="POST">
        @csrf

        <div class = "table-venta border">
            <div class ="dts-pro">
                <label class="lbl-pro" for="date">Fecha</label>
                <input class="form-control" name="date" type="text" value="{{ date('Y-m-d H:i:s') }} ">

                <label for="pago" class="lbl-pro">Metodo Pago</label>
                <select class="form-control" name="pago">
                    <option value="Credito" selected>Credito</option> 
                    <option value="Efectivo">Efectivo</option>
                </select>

            </div>

            <div class = "dts-pro">  
                <label for="cliente_select"class="lbl-pro">Cliente </label>
                <select class="form-control" name="cliente_select">
                    @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->id}}:{{$cliente->nombre}}</option>
                    @endforeach      
                </select>
                
                <label for="empleado_select"class="lbl-pro">Empleado </label>
                <select class="form-control" name="empleado_select">
                    @foreach ($empleados as $empleado)
                    <option value="{{$empleado->id}}">{{$empleado->id}}:{{$empleado->nombre}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="dts-pro">
                <label class="lbl-pro" for="">Precio</label>
                <input class="form-control" id="valorobjeto" value="{{$producto->precio}}" readonly>

                <label for="quantity" class ="lbl-pro">Cantidad</label>
                <input name="quantity" id="quantity" class="form-control" type="number" max="{{$producto->stock}}" min ="0">
            </div>

            <div class="dts-pro">
                <input name="status" type="hidden" value="0">

                <input name="producto_id" type="hidden" value="{{$producto->id}}">
                <input name="precio" type="hidden" value="{{$producto->precio}}">

            </div>
           
        
            <button class="btn btn-primary btn-block " type="submit" id="btnSubmit2">Submit</button>
        </div>
        
    </form>

    <div class="table-venta2 border">
        <div>
            <label for=""> <strong>  IVA: 16% </strong></label>
        </div>
        <div>
            <label for=""> <strong>  Subtotal: </strong></label>
            <label for="sub" id="subtotal" >0</label>
        </div>
        
        <div>
            <label for=""> <strong>  Total: </strong></label>
            <label id="total" > 0 </label>
        </div>

    </div>


<script>
    $(document).ready(function (){
        $("#quantity").change(function(){

            var quantity = $(this).val() * $("#valorobjeto").val()
            $("#subtotal").text(quantity);

            var total = quantity + (quantity * .16);
            $("#total").text(total);
        });
    });
</script>

@endsection