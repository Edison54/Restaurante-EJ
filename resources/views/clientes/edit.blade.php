@extends('layout')

@section('title', "Editar Comida")

@section('content')

    <!-- Esta es la view de editar los clientes-->

    <div class="form">
        <h1>Editar cliente</h1>

        <form action="{{ route('clientes.update', $clientes) }}" method="POST">
    <div class="contenedor">
            <a class="link" href="{{ route('clientes.show', $clientes) }}">Volver</a>
    </div>
            @csrf
            @method('PATCH')

        <!-- Aqui se ingresan los datos que se quieren actualizar con el metodo POST y el .update-->

            <label for="cedula">Cedula</label>
            <input type="number" name="cedula" value="{{ $clientes->cedula }}" readonly  required="">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $clientes->nombre }}"  required="">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="{{ $clientes->apellidos }}"  required="">

            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" value="{{ $clientes->telefono }}"  required="">

            <label for="direccion">Direccion domicilio</label>
            <input type="text" name="direccion" value="{{ $clientes->direccion }}"  required="">


            <!-- imput de tipo submit para enviar los datos-->
            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection
