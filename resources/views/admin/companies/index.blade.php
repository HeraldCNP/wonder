@extends('admin.layout')


@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Empresas<br><small>En esta sección puede ver todos las Empresas creados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Empresas</li>
        <li><a href="">Lista de Empresas</a></li>
    </ul>


    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            <a class="btn btn-primary float-right"  href="{{ route('companies.create') }}">Crear Nuevo</a> <br><br>
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Contacto</th>
                    <th>Web</th>
                    <th>Estado</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr class="text-center">
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->description }}</td>
                        <td><img src="{{ $company->image }}" width="100px"></td>
                        <td>{{ $company->contact }}</td>
                        <td>{{ $company->web }}</td>
                        <td>
                            <label class="switch switch-danger" for="#status">
                                <input type="checkbox" id="status" name="status"
                                       @if($company['status'] === "yes")
                                           checked
                                       @endif
                                >
                                <span data-toggle="tooltip" title="{{ $company['active'] }}  Activo"></span>
                            </label>
                        </td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ route('companies.show', $company->id) }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-xs btn-success" href="{{ route('companies.edit', $company->id) }}"><i class="fa fa-pencil"></i></a>
                            <form style="display: inline" action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
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


