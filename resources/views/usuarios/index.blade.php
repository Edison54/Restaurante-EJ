@extends('layout')

@section('title', "Usuarios")

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
        <h1>Usuarios</h1>


        <a href="{{ route('home') }}" class="link">inicio</a>
        <!-- Boton que lleva al home -->
        <ul class="lista">
            @forelse($usuarios as $usuarios)
                <li><a class="show-link" href="{{ route('usuarios.show', $usuarios) }}">{{ $usuarios->name  }}<p>{{ $usuarios->id  }}</p> </a></li>

            @empty
        <li>No hay usuarios para mostrar</li>
        @endforelse
        </ul>
        </div>
@endsection
