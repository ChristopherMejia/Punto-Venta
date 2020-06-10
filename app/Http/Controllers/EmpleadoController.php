<?php

namespace App\Http\Controllers;

use App\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleado.display', [
            'empleados'=> Empleado::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nombre'=>['required','string','max:25'],
            'apellido' =>['required','string','max:25'],
            'telefono' =>['required','string','max:10','min:10'],
            'rfc'=>['required','string','max:13'],
            'direccion'=>['required','string','max:255'],
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'select'=>['required','string'],
            'slc'=>['required','string'],
        ]);
        //var_dump($validator);
        $empleado = new Empleado();
        $empleado->nombre=$validator['nombre'];
        $empleado->apellido=$validator['apellido'];
        $empleado->telefono=$validator['telefono'];
        $empleado->rfc=$validator['rfc'];
        $empleado->direccion=$validator['direccion'];
        $empleado->email=$validator['email'];
        $empleado->sexo=$validator['select'];
        $empleado->puesto=$validator['slc'];
        $empleado->save();

        return redirect ('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view ('empleado.detailsEmpleado',[
            'empleado'=> $empleado
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
        $validator = $request->validate([
            'nombre'=>['required','string','max:25'],
            'apellido' =>['required','string','max:25'],
            'telefono' =>['required','string','max:10','min:10'],
            'rfc'=>['required','string','max:13'],
            'direccion'=>['required','string','max:255'],
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'select'=>['required','string'],
            'slc'=>['required','string'],
        ]);
        //var_dump($validator);
        $empleado = Empleado::find($id);
        $empleado->nombre=$validator['nombre'];
        $empleado->apellido=$validator['apellido'];
        $empleado->telefono=$validator['telefono'];
        $empleado->rfc=$validator['rfc'];
        $empleado->direccion=$validator['direccion'];
        $empleado->email=$validator['email'];
        $empleado->sexo=$validator['select'];
        $empleado->puesto=$validator['slc'];
        $empleado->save();

        return redirect ('/empleado/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleado/display');
    }

    public function confirmDelete($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.confirmDelete',[
            'empleado'=> $empleado
        ]);
    }
}
