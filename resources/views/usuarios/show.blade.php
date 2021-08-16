@extends('layout')

@section('title', "Mostrar usuarios")

@section('content')
    <!-- Aqui se cargan todos los datos de los usuarios-->
    <div class="contenedor">
        <h1>{{ $usuarios->nombre }}</h1>
        <!-- boton para ir al edit-->
        <a class="link" href="{{ route('usuarios.edit', $usuarios) }}">Editar</a>

        <div class="contenedor">
            <!-- boton para ir al edit-->
            <a href="{{ route('usuarios.index') }}" class="link">volver</a>

        </div>
        <!-- boton para borrar se usa el .destroy y el DELETE -->
        <form action="{{ route('usuarios.destroy', $usuarios) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">

        </form>
        <!-- form que muestra los datos-->
        <p>ID: {{ $usuarios->id }}</p>
        <p>Nombre : {{ $usuarios->name }}</p>
        <p>email: {{ $usuarios->email }}</p>



    </div>
@endsection
