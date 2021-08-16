@extends('layout')

@section('title', "Insertar comida")

@section('content')

    <!-- Esta es la view de crear comidas-->


    <div class="form">
        <h1>Insertar una comida</h1>

        <form action="{{ route('comidas.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('comidas.index') }}" class="link">volver</a>
                </div>
            @csrf

        <!-- Aqui se ingresan los datos con el metodo POST y el .store-->


            <label for="ID">ID Comida</label>
            <input type="number" name="ID"  required="">

            <label for="nombre">Nombre comida</label>
            <input type="text" name="nombre"  required="">

            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion" required="">

            <label for="precio">precio</label>
            <input type="number" name="precio" required="">

            <label for="ingredientes">ingredientes</label>
            <input type="text" name="ingredientes" required="">

            <label for="imagen">URL Imagen</label>
            <input type="text" name="imagen" required="">

            <!-- imput de tipo submit para enviar los datos-->
            <input type="submit" value="Insertar">


        </form>
    </div>

@endsection
