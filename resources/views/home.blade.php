
@extends('layout')
@section('title', "Inicio")

@section('content')



    <!-- Este es el view rincipal que lleva a todas las demas opciones -->
    <body>
    <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="contenedor">
        <h1>Inicio</h1>
        <!-- Botones que van a las opciones -->
        <a href="{{ route('usuarios.index') }}" class="link">Editar usuarios</a>
        <a href="{{ route('clientes.index') }}" class="link">Ver clientes</a>
        <a href="{{ route('comidas.index') }}" class="link">Editar comidas</a>
        <a href="{{ route('facturar.index') }}" class="link">Hacer pedido</a>


</div>
@endsection
