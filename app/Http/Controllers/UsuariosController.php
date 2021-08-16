<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;









class UsuariosController extends Controller

    /**
    Este es todo el controler de los usuarios
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
        return view('usuarios.index', ['usuarios' => User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */

    /**
    El show que los muestra
     */
    public function show(User $usuarios)
    {
        return view('usuarios.show', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */

    /**
    El edit que los edita
     */
    public function edit(User $usuarios)
    {
        return view('usuarios.edit', ['usuarios' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */

    /**
    El update que los actualiza
     */
    public function update(Request $request, User $usuarios)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',


        ]);

        $usuarios->update($fields);

        return redirect()->route('usuarios.show', $usuarios);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */

    /**
    El destroy que los borra
     */
    public function destroy(User $usuarios)
    {
        $usuarios->delete();

        return redirect()->route('auth.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */

}
