<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Cliente;
use App\Producto;
use App\Empleado;
use App\detalleVentas;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venta.venta',[
            'clientes'=>\App\Cliente::select('nombre','id')->get(),
            'empleados'=>\App\Empleado::select('nombre','id')->get(),
            'productos'=>\App\Producto::all(),
        ]);
    }
    public function display(){
        return view('venta.display');
    }
    public function encontrar(Request $request){

         $var = $request['dato'];
        
         $venta=Venta::find((int)$var);
        
         echo \json_encode($venta);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        // $cliente=$request->only('cliente_select');
        // $empleado=$request->only('empleado_select');

        // $id_cliente=DB::table('clientes')->select('id')->where('nombre', '=', $cliente )->first();
        // $id_empleado=DB::table('empleados')->select('id')->where('nombre','=', $empleado)->first();

        // //var_dump($id_cliente,$id_empleado);
         $venta = new Venta();
         $venta->empleado_id = $request->get('empleado_select');
         $venta->cliente_id = $request->get('cliente_select');
         $venta->metodo_pago = $request->get('pago');
         $venta->status = $request->get('status');
         $venta->date = $request->get('date');
         $venta->save();

         $detalleVenta = new detalleVentas();
         $detalleVenta->venta_id =$venta->id;
         $detalleVenta->producto_id = $request->get('producto_id');
         $detalleVenta->precio = $request->get('precio');
         $detalleVenta->cantidad = $request->get('quantity');
         $detalleVenta->date = $request->get('date');
         $detalleVenta->save(); 

         return redirect ('/venta'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('venta.carrito',[
            'producto'=> $producto,
            'clientes'=>\App\Cliente::select('nombre','id')->get(),
            'empleados'=>\App\Empleado::select('nombre','id')->get(),
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
        dd($request->all());
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

    public function details($id){
        // dd($id);
        $ventas = Venta::find($id);

        return view('venta.details',[
            'venta'=>$ventas
        ]);
    }

    public function ventas_empleado($id){
        $empleados = Empleado::find($id);

        return view('venta.venta_empleado',[
            'empleado'=>$empleados
        ]);
    }
    public function ventas_cliente($id){
        $clientes = Cliente::find($id);

        return view('venta.venta_cliente',[
            'cliente'=>$clientes
        ]);
    }
    public function ventas_producto($id){
        $producto = Producto::find($id);
        //  dd($productos);
        return view('venta.venta_producto',[
            'producto'=>$producto
        ]);
    }
}
