<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    /**
  Este es todo el controler de los clientes
     */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
  El index que los muestra
     */
    public function index()
    {
        return view('clientes.index', ['clientes' => Clientes::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
    El create que los crea
     */

    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
    El store que los guarda
     */

    public function store(Request $request)
    {
        $fields = $request->validate([
            'cedula' => 'required|integer',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|integer',
            'direccion' => 'required|string',


        ]);
        Clientes::create($fields);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */

    /**
    El show que los muestra
     */


    public function show(Clientes $clientes)
    {
        return view('clientes.show', ['clientes' => $clientes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */

    /**
    El edit que los edita
     */

    public function edit(Clientes $clientes)
    {
        return view('clientes.edit', ['clientes' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */

    /**
    El update que los actualiza
     */

    public function update(Request $request, Clientes $clientes)
    {
        $fields = $request->validate([
            'cedula' => 'required|integer',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|integer',
            'direccion' => 'required|string',

        ]);

        $clientes->update($fields);

        return redirect()->route('clientes.show', $clientes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */

    /**
    El destroy que los borra
     */



    public function destroy(Clientes $clientes)
    {
        $clientes->delete();

        return redirect()->route('clientes.index');
    }
}
