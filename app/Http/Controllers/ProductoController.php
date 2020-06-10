<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.display',[
            'productos'=> Producto::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request -> validate([
            'nombre' => ['required','string','max:255'],
            'precio' => ['required','string'],
            'descripcion' => ['required','max:255'],
            'stock' => ['required'], 
        ]);
        //var_dump($validator);
        $Producto = new Producto();
        $Producto->nombre = $validator['nombre'];
        $Producto->precio = $validator['precio'];
        $Producto->descripcion = $validator['descripcion'];
        $Producto->stock = $validator['stock'];
        $Producto->save();

        return redirect ('/producto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::find($id);
        return view("productos.detailsProducto",[
                'producto'=>$producto
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
        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/producto/display');
    }
    public function confirmDelete($id)
    {
        $producto = Producto::find($id);
        
        return view('productos.confirmDeleteProducto',[
            'producto'=>$producto
        ]);
    }
}
