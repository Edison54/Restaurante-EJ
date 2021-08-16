@extends('layout')

@section('title', "Editar usuarios")

@section('content')

    <!-- Esta es la view de editar todos los usuarios registrados -->

    <div class="form">
        <h1>Editar usuarios registrados</h1>

        <form action="{{ route('usuarios.update', $usuarios) }}" method="POST">

            <a class="link" href="{{ route('usuarios.show', $usuarios) }}">Volver</a>
            @csrf
            @method('PATCH')

            <label for="id">Id</label>
            <!-- Aqui se ingresan los datos que se quieren actualizar con el metodo POST y el .update-->
            <input type="number" name="ID" value="{{ $usuarios->id }}" readonly  required="">

            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ $usuarios->name }}"  required="">

            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $usuarios->email }}"  required="">



            <!-- imput de tipo submit para enviar los datos-->
            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection
