@extends('layout')

@section('title', "Editar orden")

@section('content')

    <!-- Esta es la view de editar las ordenes -->

    <div class="form">
        <h1>Editar factura</h1>

        <form action="{{ route('facturar.update', $orden) }}" method="POST">

            <a class="link" href="{{ route('facturar.show', $orden) }}">Volver</a>
            @csrf
            @method('PATCH')

        <!-- Aqui se ingresan los datos que se quieren actualizar con el metodo POST y el .update-->

            <label for="ID">Codigo</label>
            <input type="number" name="ID" value="{{ $orden->ID }}" readonly  required="">

            <label for="ordenClienteCedula">Cedula Cliente</label>
            <input type="text" name="ordenClienteCedula" value="{{ $orden->ordenClienteCedula }}"  required="">

            <label for="comidaOrdenadaID">ID comida</label>
            <input type="text" name="comidaOrdenadaID" value="{{ $orden->comidaOrdenadaID }}"  required="">

            <label for="userOrdenID">ID usuario</label>
            <input type="number" name="userOrdenID" value="{{ $orden->userOrdenID }}"  required="">

            <label for="detalleOrden">Detalles de la orden</label>
            <input type="text" name="detalleOrden" value="{{ $orden->detalleOrden }}"  required="">

            <!-- imput de tipo submit para enviar los datos-->

            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection
