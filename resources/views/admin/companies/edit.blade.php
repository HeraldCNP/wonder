@extends('admin.layout')

@section('content')

    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Editar Rol<br><small>En esta sección puede editar un rol</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Roles</li>
        <li><a href="">Editar Rol</a></li>
    </ul>

    <div class="block full">
        <div class="card">
            @include('partials.message')

            <form method="POST" enctype = "multipart/form-data" action="{{ route('companies.update', $company->id) }}">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-5">
                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <label for="title">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Título" value="{{ old('name', $company->name) }}">
                                @if ($errors->has('name'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('name') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="3" placeholder="description" >{{ old('description', $company->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('description') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($errors->has('image'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('image') }}
                                    </small>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-5">
                            <h3>Datos de Contacto</h3>
                            <div class="form-group">
                                <label for="title">Teléfono</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="# de teléfono" value="{{ old('contact', $company->contact) }}">
                                @if ($errors->has('contact'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('contact') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title">Pagina Web</label>
                                <input type="url" class="form-control" id="web" name="web" placeholder="ej. (https://www.wondergroup.com.bo)" value="{{ old('web', $company->web) }}">
                                @if ($errors->has('web'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('web') }}
                                    </small>
                                @endif
                            </div>
                            <hr>
                            <h3>Estado</h3>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="statusYes" name="status" class="custom-control-input" value="yes"
                                       @if(old('status') == "yes")
                                       checked
                                    @endif
                                >
                                <label class="custom-control-label" for="statusYes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="statusNo" name="status" class="custom-control-input" value="no"
                                       @if(old('status') == "no")
                                       checked
                                       @endif
                                       @if(old('status') === null)
                                       checked
                                    @endif
                                >
                                <label class="custom-control-label" for="statusNo">No</label>
                            </div>
                            <hr>
                            <input class="btn btn-info" type="submit" value="Guardar">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
