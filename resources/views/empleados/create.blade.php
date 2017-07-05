@extends('master')
@section('title', 'Nuevo Empleados')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

            @if (isset($successmsg))
                <p class="alert alert-success">{{ $successmsg }}</p>
            @endif
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <fieldset>
                <legend>Nuevo Empleado</legend>
                <div class="form-group">
                    <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label for="apellido" class="col-lg-2 control-label">Apellido</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="col-lg-2 control-label">Edad</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="edad" placeholder="Edad" name="edad">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-lg-2 control-label">Tipo</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="tipo" placeholder="Tipo" name="tipo">
                            <option value="0" selected>Seleccione tipo de Empleado</option>
                            <option value="programador">Programador</option>
                            <option value="diseniador">Diseñador</option>
                        </select>
                    </div>
                </div>


                <label for="php" class="col-lg-2 control-label programador">Programador</label>
                <div style="border:1px solid #D2D2D2;margin-left:25px;margin-right:5px" class="form-group programador">

                        <label for="is_php" class="col-lg-2 control-label">PHP</label>
                        <input class="col-lg-2" name="is_php" id="is_php" style="margin-top:20px" type="checkbox" value="1">

                        <label for="is_net" class="col-lg-2 control-label">NET</label>
                        <input class="col-lg-2" name="is_net" id="is_net" style="margin-top:20px" type="checkbox" value="1">

                        <label for="is_python" class="col-lg-2 control-label">PYTHON</label>
                        <input class="col-lg-2" name="is_python" id="is_python" style="margin-top:20px" type="checkbox" value="1">
                </div>

                <label for="php" class="col-lg-2 control-label diseniador">Diseñadores</label>
                <div style="border:1px solid #D2D2D2;margin-left:25px;margin-right:5px" class="form-group diseniador">

                        <label for="is_grafico" class="col-lg-2 control-label">GRAFICO</label>
                        <input class="col-lg-2" name="is_grafico" id="is_grafico" style="margin-top:20px" type="checkbox" value="1">

                        <label for="is_web" class="col-lg-2 control-label">WEB</label>
                        <input class="col-lg-2" name="is_web" id="id_web" style="margin-top:20px" type="checkbox" value="1">
                </div>                

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <!--button class="btn btn-default">Cancelar</button-->
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>

            </fieldset>
            </form>
        </div>
    </div>
@endsection