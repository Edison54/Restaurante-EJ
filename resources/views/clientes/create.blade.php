@extends('layout')

@section('title', "Insertar cliente")

@section('content')

    <!-- Esta es la view de crear clientes-->


    <div class="form">
        <h1>Insertar un cliente</h1>

        <form action="{{ route('clientes.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('clientes.index') }}" class="link">volver</a>
                </div>
            @csrf

        <!-- Aqui se ingresan los datos con el metodo POST y el .store-->


            <label for="cedula">Cedula del cliente</label>
            <input type="number" name="cedula"  required="">

            <label for="nombre">Nombre </label>
            <input type="text" name="nombre"  required="">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"  required="">

            <label for="telefono">Telefono</label>
            <input type="text" name="telefono"  required="">

            <label for="direccion">Direccion</label>
            <input type="text" name="direccion"  required="">

            <!-- imput de tipo submit para enviar los datos-->
            <input type="submit" value="Insertar">


        </form>
    </div>

@endsection
