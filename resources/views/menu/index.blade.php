@extends('layout')

@section('title', "Menu")

@section('content')


    <div class="contenedor">

        <!--Aqui se puede ver el menu-->

        <a href="{{ route('facturar.create') }}" class="link">Volver a la orden</a>

        <ul class="lista-empleados">
            @forelse($comidas as $comidas)
                <li >{{ $comidas->nombre  }} <br>{{ $comidas->ID  }}</br>  <br>{{ $comidas->precio  }}</br> <img src={{ $comidas->imagen  }} alt="imagencomidas"  width="200" height="200"  ></li>

            @empty
                <li>No hay comidas para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection
