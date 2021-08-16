<?php

namespace App\Http\Controllers;

use App\Models\Comidas;
use Illuminate\Http\Request;

class ComidasController extends Controller

    /**
    Este es todo el controler de los comidas
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
        return view('comidas.index', ['comidas' => Comidas::get()]);
    }

    /**
    El index que muestra el menu
     */

    public function index2()
    {
        return view('menu.index', ['comidas' => Comidas::get()]);
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
        return view('comidas.create');
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
            'nombre' => 'required|string',
            'precio' => 'required|integer',
            'descripcion' => 'required|string',
            'ingredientes' => 'required|string',
            'imagen' => 'required|string',

        ]);

        Comidas::create($fields);

        return redirect()->route('comidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */


    /**
    El show que los muestra
     */

    public function show(Comidas $comidas)
    {
        return view('comidas.show', ['comidas' => $comidas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */

    /**
    El edit que los edita
     */
    public function edit(Comidas $comidas)
    {
        return view('comidas.edit', ['comidas' => $comidas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */

    /**
    El update que los actualiza
     */
    public function update(Request $request, Comidas $comidas)
    {
        $fields = $request->validate([
            'ID' => 'required|integer',
            'nombre' => 'required|string',
            'precio' => 'required|integer',
            'descripcion' => 'required|string',
            'ingredientes' => 'required|string',
            'imagen' => 'required|string',

        ]);

        $comidas->update($fields);

        return redirect()->route('comidas.show', $comidas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */

    /**
    El destroy que los borra
     */

    public function destroy(Comidas $comidas)
    {

        $comidas->delete();

        return redirect()->route('comidas.index');
    }
}
