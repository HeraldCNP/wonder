@extends('admin.layout')


@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Trabajos<br><small>En esta sección puede ver todos los Trabajos creados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Trabajos</li>
        <li><a href="">Lista de Trabajos</a></li>
    </ul>


    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            <a class="btn btn-primary float-right"  href="{{ route('works.create') }}">Crear Nuevo</a> <br><br>
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Url</th>
                    <th>iframe</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                    <th colspan="3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                    <tr class="text-center">
                        <td>{{ $work->title }}</td>
                        <td>{{ $work->description }}</td>
                        <td><img src="{{ $work->image }}" width="100px"></td>
                        <td><a href="{{ $work->url }}" target="_blank">Link</a></td>
                        <td><a href="{{ $work->iframe }}" target="_blank">Ver</a></td>
                        <td>{{ $work->category->name }}</td>

                        <td>
                            <label class="switch switch-danger" for="#fullAccess">
                                <input type="checkbox" id="fullAccess" name="full-access"
                                       @if($work['status'] === "yes")
                                           checked
                                       @endif
                                >
                                <span data-toggle="tooltip" title="{{ $work['active'] }}  Activo"></span>
                            </label>
                        </td>
                        <td>
{{--                            <a class="btn btn-xs btn-info" href="{{ route('works.show', $work->id) }}" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i></a>--}}

                            <a class="btn btn-xs btn-success" href="{{ route('works.edit', $work->id) }}" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil"></i></a>

                            <form action="{{ route('works.destroy', $work->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de querer eliminar este usuario')" data-toggle="tooltip" title="Eliminar"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $works->links() }}
            </div>
        </div>





    </div>

@endsection



@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/tablesDatatables.js') }}"></script>
    <script>$(function(){ TablesDatatables.init(); });</script>

@endpush


