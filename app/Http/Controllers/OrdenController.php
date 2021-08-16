<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller

    /**
    Este es todo el controler de las ordenes y facturas
     */
{
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
        return view('facturar.index', ['orden' => Orden::get()]);
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
        return view('facturar.create');
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
            'ID' => 'required|integer',
            'ordenClienteCedula' => 'required|integer',
            'comidaOrdenadaID' => 'required|integer',
            'userOrdenID' => 'required|integer',
            'detalleOrden' => 'required|string',


        ]);
        Orden::create($fields);

        return redirect()->route('facturar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */

    /**
    El show que los muestra
     */
    public function show(Orden $orden)
    {
        return view('facturar.show', ['orden' => $orden]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */

    /**
    El edit que los edita
     */
    public function edit(Orden $orden)
    {
        return view('facturar.edit', ['orden' => $orden]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */

    /**
    El update que los actualiza
     */
    public function update(Request $request, Orden $orden)
    {
        $fields = $request->validate([
            'ID' => 'required|integer',
            'ordenClienteCedula' => 'required|integer',
            'comidaOrdenadaID' => 'required|integer',
            'userOrdenID' => 'required|integer',
            'detalleOrden' => 'required|string',

        ]);

        $orden->update($fields);

        return redirect()->route('facturar.show', $orden);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */

}
