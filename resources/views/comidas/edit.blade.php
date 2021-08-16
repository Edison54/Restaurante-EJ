@extends('layout')

@section('title', "Editar Comida")

@section('content')

    <!-- Esta es la view de editar las comidas -->

    <div class="form">
        <h1>Editar Comida</h1>

        <form action="{{ route('comidas.update', $comidas) }}" method="POST">

            <a class="link" href="{{ route('comidas.show', $comidas) }}">Volver</a>
            @csrf
            @method('PATCH')

        <!-- Aqui se ingresan los datos que se quieren actualizar con el metodo POST y el .update-->

            <label for="ID">Codigo</label>
            <input type="number" name="ID" value="{{ $comidas->ID }}" readonly  required="">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $comidas->nombre }} "  required="">

            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="{{ $comidas->descripcion }}"  required="">

            <label for="precio">Precio</label>
            <input type="number" name="precio" value="{{ $comidas->precio }}"  required="">

            <label for="ingredientes">Ingredientes</label>
            <input type="text" name="ingredientes" value="{{ $comidas->ingredientes }}"  required="">

            <label for="imagen">URL imagen</label>
            <input type="text" name="imagen" value="{{ $comidas->imagen }}"  required="">

            <!-- imput de tipo submit para enviar los datos-->

            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection
