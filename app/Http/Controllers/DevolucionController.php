<?php

namespace App\Http\Controllers;

use App\Devolucion;
use App\Cliente;
use App\Venta;
use App\Empleado;
use App\DetalleDevolucion;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;


class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('devolucion.index',
        [
            'devoluciones' => Devolucion::all(),
            'ventas'=>\App\Venta::select('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
    
        $ventas = Venta::find($request);
        //  dd($ventas->all());

        return view('devolucion.create', [
            'empleados'=>\App\Empleado::select('nombre','id')->get(),
            'ventas'=>$ventas,
                 
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $devolucion = new Devolucion();
        $devolucion->date = $request->get('date');
        $devolucion->empleado_id = $request->get('empleado_select');
        $devolucion->venta_id = $request->get('venta_id');
        $devolucion->status = $request->get('status');
        $devolucion->save();

        $detalle_devolucion = new DetalleDevolucion();
        $detalle_devolucion->devolucion_id = $devolucion->id;
        $detalle_devolucion->producto_id = $request->get('producto_id');
        $detalle_devolucion->cantidad = $request->get('cantidad');
        $detalle_devolucion->motivo = $request->get('motivo');
        $detalle_devolucion->save();

        return redirect ('/devolucion'); 
    }

    public function find(Request $request)
    {
        $var = $request['dato'];
        
        $devolucion=Devolucion::find((int)$var);
        
        echo \json_encode($devolucion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devolucion = Devolucion::find($id);

        return view('devolucion.detalles',[
            'devolucion'=>$devolucion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function devolucion_empleado($id){
        $empleado = Empleado::find($id);

        return view('devolucion.devolucion_empleado',[
            'empleado'=>$empleado
        ]);
    }
    public function devolucion_cliente($id){
        $cliente = Cliente::find($id);

        return view('devolucion.devolucion_cliente',[
            'cliente'=>$cliente
        ]);
    }
}
