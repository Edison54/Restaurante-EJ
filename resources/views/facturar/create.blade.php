@extends('layout')

@section('title', "Insertar facturar")

@section('content')



    <!-- Esta es la view de crear ordenes-->

    <div class="form">
        <h1>Insertar una orden</h1>

        <form action="{{ route('facturar.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('facturar.index') }}" class="link">volver</a>
                <a href="{{ route('menu.index') }}" class="link">Ver menu</a>

                </div>
            @csrf

        <!-- Aqui se ingresan los datos con el metodo POST y el .store-->

            <label for="ID">ID orden</label>
            <input type="number" name="ID"  required="">

            <label for="ordenClienteCedula">Cedula cliente </label>
            <input type="text" name="ordenClienteCedula"  required="">

            <label for="comidaOrdenadaID">ID Comida</label>
            <input type="text" name="comidaOrdenadaID" required="">

            <label for="userOrdenID">ID Usuario</label>
            <input type="number" name="userOrdenID" required="">

            <label for="detalleOrden">Detalle de la orden</label>
            <input type="text" name="detalleOrden" required="">

            <!-- imput de tipo submit para enviar los datos-->

            <input class="input1" type="submit" value="Insertar">
        </form>
    </div>

@endsection
