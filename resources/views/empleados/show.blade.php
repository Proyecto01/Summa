@extends('master')
@section('title', 'Detalle de Empleado')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">@yield('title')</h2>
                    <p> <strong>Nombre</strong>: {!! $empleado->getNombre() !!}</p>
                    <p> <strong>Apellido</strong>: {!! $empleado->getApellido() !!}</p>
                    <p> <strong>Edad</strong>: {!! $empleado->getEdad() !!} </p>
                </div>
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-info">Delete</a>
            </div>
    </div>

@endsection