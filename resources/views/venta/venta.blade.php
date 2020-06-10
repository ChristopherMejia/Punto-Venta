@extends('layouts.app')
@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Venta </strong> </h1>
        </div>
    </div>

    <div class ="table-venta border">

    <!-- <form id="formulario" action="" method="get">
        @csrf
        <div class ="dts-pro">
            <label for="findVenta"class="lbl-pro">Producto </label>
            <input id="src" name="findVenta" class="form-control" type="text" placeholder ="Buscar por ID">
            
            <div class = "serch" >
                <button id="serch" class= "btn btn-primary" type = "submit"  >Serch</button>
            </div>
        </div>
    </form> -->
    
    <table class="table table-dark">

    <tr>
        <th><span>ID</span></th> 
        <th><span>Producto</span></th>
        <th><span>Precio</span></th>
        <th><span>Descripcion</span></th>
        <th><span>Stock</span></th>
        <th><span>Acciones</span></th>
    </tr>
    <tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}} </td>
            <td>{{$producto->precio}} </td>
            <td>{{$producto->descripcion}} </td>
            <td>{{$producto->stock}} </td>
            <td><a class="btn btn-outline-primary" href="/venta/{{$producto->id}}/confirm">Add</a></td>

        </tr>
        @endforeach
    </tr>
    </table>
        
    </div>
    
<!--            
<script>

    $(document).ready(function (){


        $("form#formulario").submit(function (e) {
             e.preventDefault();
            // alert("Submitted");
       
            var dato = $('#src').val();
            $.ajax({
                type: "GET",
                data: {"dato" : dato},
                url: "venta/producto",
                dataType: "json",
                success:  function (response) {
                    // alert(response);
                    
                    console.log(response);

                    var table = $('#tbody');
                    
                    var content = `
                    
                    <tr>
                        <td>
                            ${response.id}
                        </td>
                        <td>
                            ${response.nombre}
                        </td>
                        <td>
                            <input class="dts-ventas" id="valorobjeto" value="${response.precio}" type="number" readonly>
                        </td>
                        <td>
                            ${response.descripcion}
                        </td>
                        <td>
                            ${response.stock}  
                        </td>
                        <td>
                            <input id="quantity" type="number" max="${response.stock}" min="0">
                        </td>
                        <td>
                            <label for="sub" id="subtotal" >0</label>
                        </td>
                        <td>
                            <input class="dts-ventas" id="iva" value=".16" type="number" readonly>
                        </td>
                        <td>
                            <label id="total" > 0 </label>
                        </td>
                        <td>
                            <div class = "serch" >
                                <button  class= "btn btn-primary" type = "submit"  >Add</button>
                            </div>
                        </td>  
                    </tr>

                   

                    `;
                    table.append(content)

                    $("#quantity").change(function(){
            
                    var quantity = $(this).val() * $("#valorobjeto").val()
                    $("#subtotal").text(quantity);

                    var total = quantity + (quantity * .16);
                    $("#total").text(total);

                    });

                }
            });
            
        });

       

    });

        
</script> -->

@endsection
