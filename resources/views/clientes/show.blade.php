@extends('layout')

@section('title', "Mostrar clientes")

@section('content')


    <!-- Aqui se cargan todos los datos de los clientes-->
    <div class="contenedor">
        <h1>{{ $clientes->nombre }}</h1>

        <!-- boton para ir al edit-->
        <a class="link" href="{{ route('clientes.edit', $clientes) }}">Editar</a>

        <div class="contenedor">
            <!-- boton para volver-->
            <a href="{{ route('clientes.index') }}" class="link">volver</a>
        </div>
        <!-- boton para borrar se usa el .destroy y el DELETE -->
        <form action="{{ route('clientes.destroy', $clientes) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">
            <!-- form que muestra los datos  -->
        </form>
        <p>Cedula: {{ $clientes->cedula }}</p>
        <p>Nombre : {{ $clientes->nombre }}</p>
        <p>Apellidos: {{ $clientes->apellidos }}</p>
        <p>Telefono: {{ $clientes->telefono }}</p>
        <p>Direccion domicilio: {{ $clientes->direccion }}</p>


    </div>
@endsection
