@extends('layout')

@section('title', "Mostrar comidas")

@section('content')

    <!-- Aqui se cargan todos los datos de los comidas-->
    <div class="contenedor">
        <h1>{{ $comidas->nombre }}</h1>
        <!-- boton para ir al edit-->
        <a class="link" href="{{ route('comidas.edit', $comidas) }}">Editar</a>

        <div class="contenedor">
            <!-- boton para volver-->
            <a href="{{ route('comidas.index') }}" class="link">volver</a>
        </div>
        <!-- boton para borrar se usa el .destroy y el DELETE -->
        <form action="{{ route('comidas.destroy', $comidas) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">

        </form>
        <!-- form que muestra los datos  -->
        <img src= {{ $comidas->imagen }} width="200" height="200">
        <p>ID: {{ $comidas->ID }}</p>
        <p>Nombre : {{ $comidas->nombre }}</p>
        <p>Descripcion: {{ $comidas->descripcion }}</p>
        <p>Precio: {{ $comidas->precio }}</p>
        <p>Ingredientes: {{ $comidas->ingredientes }}</p>
        <p>URL imagen: {{ $comidas->imagen }}</p>

    </div>
@endsection
