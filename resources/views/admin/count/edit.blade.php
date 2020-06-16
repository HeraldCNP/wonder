@extends('admin.layout')

@section('content')

    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Editar Contador<br><small>En esta sección puede editar el contador</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Contador</li>
        <li><a href="">Editar Contador</a></li>
    </ul>

    <div class="block full">
        <div class="card">
            @include('partials.message')

            <form method="POST" action="{{ route('counts.update', $count->id) }}">
                @method('PUT')
                @csrf
                <div class="container text-center">
                    <h3>Datos Requeridos</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="countProyect">Clientes Satisfechos</label>
                                <div class="input-group">
                                    <input type="text" id="countClient" name="countClient" class="form-control" value="{{ $count->clients }}">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger" onclick="countClients()"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="countProyect">Tazas de café</label>
                                <div class="input-group">
                                    <input type="text" id="countCoffee" name="countCoffee" class="form-control" value="{{ $count->coffee }}">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger" onclick="countCoffees()"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="countProyect">Proyectos en Proceso</label>
                                <div class="input-group">
                                    <input type="text" id="countBuilding" name="countBuilding" class="form-control" value="{{ $count->building }}">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger" onclick="countBuildings()"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <input class="btn btn-info" type="submit" value="Guardar">
                </div>
            </form>

        </div>
    </div>
@endsection

@push('scripts')

    <script>
        function countClients(){
            let client = document.getElementById("countClient").value;
            client++;
            document.getElementById("countClient").value=client;
        }
        function countCoffees(){
            let coffee = document.getElementById("countCoffee").value;
            coffee++;
            document.getElementById("countCoffee").value=coffee;
        }
        function countBuildings(){
            let building = document.getElementById("countBuilding").value;
            building++;
            document.getElementById("countBuilding").value=building;
        }
    </script>

@endpush
