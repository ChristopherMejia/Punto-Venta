<?php

namespace App\Http\Controllers;

use App\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cliente.clienteDisplay',[
            'clientes' => Cliente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request -> validate ([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono'  => ['required', 'string'],
            'direccion' => ['required', 'string','max:255'],
            'rfc'=>['required','string'],
            'select'=>['required'],
        ]);

        $client = new Cliente();
        $client->Nombre = $validator['nombre'];
        $client->Email = $validator['email'];
        $client->Telefono = $validator['telefono'];
        $client->Direccion = $validator['direccion'];
        $client->RFC = $validator['rfc'];
        $client->Sexo = $validator['select'];
        $client->save();

        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.details',[
            'cliente' => $cliente
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
        $validator = $request -> validate ([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono'  => ['required', 'string'],
            'direccion' => ['required', 'string','max:255'],
            'rfc'=>['required','string'],
            'select'=>['required'],
        ]);

        $cliente = Cliente::find($id);
        $cliente->Nombre = $request->get('nombre');
        $cliente->Email = $request->get('email');
        $cliente->Telefono = $request->get('telefono');
        $cliente->Direccion = $request->get('direccion');
        $cliente->RFC = $request->get('rfc');
        $cliente->Sexo = $request->get('select');
        $cliente->save();

        return redirect('/cliente/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/cliente/display');
    }
    public function confirmDelete($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.confirmDeleteCliente',[
            'cliente'=> $cliente
        ]);
    }
}
