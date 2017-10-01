@extends('layouts.app')
@section('styles')
<!-- DataTables CSS-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.4.2/r-2.2.0/datatables.min.css"/>

@endsection
@section('scripts')
<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.4.2/r-2.2.0/datatables.min.js"></script>

<script src="{{asset('js/script.js')}}"></script>
@endsection

@section('content')
@section('link')
<li><a href="{{route('empleado.create')}}">Nuevo Empleado</a></li>
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Empleados Registrados</div>

                <div class="panel-body">
                    <table id="empleadoTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        </tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
