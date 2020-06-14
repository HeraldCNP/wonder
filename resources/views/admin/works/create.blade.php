@extends('admin.layout')
@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Crear Nuevo Trabajo<br><small>En esta sección puede crear un nuevo Trabajo</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Trabajos</li>
        <li><a href="">Crear Trabajo</a></li>
    </ul>

    <div class="block full">
        <div class="card">
            @include('partials.message')
            <form method="POST" enctype = "multipart/form-data" action="{{ route('works.store') }}">
                @csrf
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-5 col-md-offset-1">
                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('title') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="3" placeholder="description" >{{ old('description') }}</textarea>
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
                            <hr>

                        </div>
                        <div class="col-md-4">

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
                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label" for="example-chosen-multiple">Creado Por</label>

                                    <select id="example-chosen-multiple" name="users[]" class="select-chosen" data-placeholder="Seleccione aqui" multiple>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->person->name }}</option>
                                        @endforeach
                                    </select>

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


