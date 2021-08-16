@extends('layout')

@section('title', "Editar factura")

@section('content')

    <div class="contenedor">

        <!-- Aqui se cargan todos los datos de las facturas-->
        <h1>{{ $orden->nombre }}</h1>

        <!-- boton para ir al edit-->
        <a class="link" href="{{ route('facturar.edit', $orden) }}">Editar</a>

        <div class="contenedor">
            <!-- boton para volver-->
            <a href="{{ route('facturar.index') }}" class="link">volver</a>
        </div>




        </form>
        <!-- form que muestra los datos-->
        <p>ID: {{ $orden->ID }}</p>
        <p>Cedula cliente : {{ $orden->ordenClienteCedula }}</p>
        <p>ID Comida: {{ $orden->comidaOrdenadaID }}</p>
        <p>ID usuario: {{ $orden->userOrdenID }}</p>
        <p>Detalle de la orden: {{ $orden->detalleOrden }}</p>


    </div>
@endsection
