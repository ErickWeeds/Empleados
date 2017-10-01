@extends('layouts.app')
@section('link')
<li><a href="{{route('empleado.index')}}">Ver Empleados</a></li>
@endsection
@section('styles')
<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
@endsection
@section('scripts')
<script src="{{asset('js/registro.js')}}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Nuevo Empleado</div>

                <form action="{{route('empleado.store')}}" method="POST">
                    <div class="panel-body form-holder">
                        {{csrf_field()}}
                        <input type="hidden" name="domiciliosCount" value="1" id="domiciliosCount">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="txtNombre" placeholder="Ingresa el nombre del empleado" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="txtNombre" placeholder="Ingresa el e-mail del empleado" required="required">
                        </div>
                        <div class="form-group">
                            <label>Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" name="txtNombre" required="required">
                        </div>
                        <div class="form-group domicilio">
                            <h4>Domicilio 1</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Calle:</label>
                                    <input type="text" class="form-control" name="txtDcalle" placeholder="Calle" required="required">
                                </div>
                                <div class="col-md-4">
                                    <label>N&uacute;mero:</label>
                                    <input type="number" class="form-control" name="txtDnumero" placeholder="Número exterior" required="required">
                                </div>
                                <div class="col-md-4">
                                    <label>Interior:</label>
                                    <input type="text" class="form-control" name="txtDinterior" placeholder="Número interior">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Colonia:</label>
                                    <input type="text" class="form-control" name="txtDcolonia" placeholder="Colonia" required="required">
                                </div>
                                <div class="col-md-4">
                                    <label>C&oacute;digo Postal:</label>
                                    <input type="number" class="form-control" name="txtDcp" placeholder="CP" required="required" maxlength="5">
                                </div>
                                <div class="col-md-4">
                                    <label>Estado:</label>
                                    <input type="text" class="form-control" name="txtDinterior" placeholder="Estado" required="required">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel-heading">
                        <div class="panel-body">
                            <div class="btn btn-default" id="addDomicilio">A&ntilde;adir Domicilio</div>
                            <button class="btn btn-success">Guardar empleado</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
