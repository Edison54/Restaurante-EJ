@extends('layout')

@section('title', "Comidas")

@section('content')

    <!-- Aqui esta un log out el cual nos cerrara la sesion-->

    <body>
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf



    </body>





    <div class="contenedor">
        <h1>Comidas</h1>

        <!-- Botones que llevan al home y al create-->
        <a href="{{ route('comidas.create') }}" class="link">Insertar comida</a>
        <a href="{{ route('home') }}" class="link">inicio</a>

        <ul class="lista">

            <!-- Lista que carga algunos  datos de las comidas-->

            @forelse($comidas as $comidas)
                <li><a class="show-link" href="{{ route('comidas.show', $comidas) }}">{{  $comidas->nombre  }}<br{{  $comidas->ID   }}</P> <br>{{  $comidas->precio   }}</br> <img src={{ $comidas->imagen  }} alt="imagencomidas"  width="190" height="190"></a></li>

            @empty
                <li>No hay comidas para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection
