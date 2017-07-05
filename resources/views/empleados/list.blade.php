@extends('master')
@section('title', 'Lista de Empleados')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Lista de Empleados </h2>
                </div>
                @if ($empleados->isEmpty())
                    <p> No hay empleados.</p>
                @else
                    <table class="table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                                <tr>
<td><a class="empleado_id" href="/empleado/{{ $empleado->getId() }}">{!! $empleado->getId() !!}</a></td>
                                    <td>{!! $empleado->getNombre() !!}</td>
                                    <td>{!! $empleado->getApellido() !!}</td>
                                    <td>{!! $empleado->getEdad() !!}</td>
                                    <td>{!! $empleado->getTipo() !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection