@extends('master')
@section('title', 'Promedio Empleados Summa')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Promedio de Edad
                </div>
                <h1>{!! $promedio !!}</h1>
            </div>
        </div>
@endsection        