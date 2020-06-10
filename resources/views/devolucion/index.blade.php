@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Devoluciones</strong></h1>
        </div>
        <div class = "table-venta border">
        <form action="/devolucion/crear" method="GET">
            <div class ="dts-pro">
                <label class="lbl-pro" for="venta_select">Venta ID:</label>
                <select class="form-control" name="venta_select">
                    @foreach ($ventas as $venta)
                        <option value="{{$venta->id}}">{{$venta->id}}</option>
                    @endforeach 
                </select>

                <div>
                    <button type="submit" class="btn btn-secondary btn-block">Nueva Devolucion</button>
                </div>
            </div>

        </form>

        
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
                    <th>Date</th>
                    <th>Empleado ID</th>
                    <th>Venta ID</th>
                    <th>Status</th>
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
                        url: "/devolucion/display",
                        dataType: "json",
                        success:  function (response) {
                        // alert(response);

                        console.log(response);

                        var table = $('#tbody');
                    
                        var content = `
                            
                            <tr>
                                <td><a href="/devolucion/${response.id}">${response.id}</a></td>
                                <td>${response.date}</td>
                                <td><a href="/devolucion/empleado/${response.empleado_id}">${response.empleado_id}</a></td>
                                <td>${response.venta_id}</td>
                                <td>${response.status}</td>
                            </tr>

                        `;
                        table.append(content)
                        }

                    })

                });

            });
        </script>

@endsection