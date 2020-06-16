@extends('admin.layout')


@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Contador<br><small>En esta sección puede ver los contadores</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Contador</li>
    </ul>


    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Trabajos Completados</th>
                    <th>Clientes Satisfechos</th>
                    <th>Tazas de café</th>
                    <th>Proyectos en Proceso</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($counts as $count)
                    <tr class="text-center">
                        <td>{{ $count->proyects }}</td>
                        <td>{{ $count->clients }}</td>
                        <td>{{ $count->coffee }}</td>
                        <td>{{ $count->building }}</td>
                        <td>
                            <a class="btn btn-xs btn-success" href="{{ route('counts.edit', $count->id) }}" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>





    </div>

@endsection



@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/tablesDatatables.js') }}"></script>
    <script>$(function(){ TablesDatatables.init(); });</script>

@endpush


