@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Ventas Realizadas </strong> </h1> 
        </div>

        <div class = "table-venta border">
        <form id="formulario" action="" method="get">
            @csrf
            
                <div class ="dts-pro">
                    <input id="src" name="findVenta" class="form-control" type="text" placeholder ="Buscar por ID">
                    
                    <div class = "serch" >
                        <button id="serch" class= "btn btn-primary" type = "submit"  >Serch</button>
                    </div>
                </div>
            
        </form>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empleado ID</th>
                    <th>Cliente ID</th>
                    <th>Metodo Pago</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
        
        <tbody id="tbody"></tbody> 
        </table>
        </div>



        <script>
            $(document).ready(function(){
                $("form#formulario").submit(function (e) {
                e.preventDefault();

                var dato = $('#src').val();

                    $.ajax({
                        type: "GET",
                        data: {"dato" : dato},
                        url: "/venta/display/find",
                        dataType: "json",
                        success:  function (response) {
                        // alert(response);

                        console.log(response);

                        var table = $('#tbody');
                    
                        var content = `
                            
                            <tr>
                                <td><a href="/venta/${response.id}">${response.id}</a></td>
                                <td><a href="/venta/empleado/${response.empleado_id}">${response.empleado_id}</a></td>
                                <td><a href="/venta/cliente/${response.cliente_id}">${response.cliente_id}</a></td>
                                <td>${response.metodo_pago}</td>
                                <td>${response.status}</td>
                                <td>${response.date}</td>
                            </tr>

                        `;
                        table.append(content)
                        }

                    })

                });

            });
        </script>

@endsection