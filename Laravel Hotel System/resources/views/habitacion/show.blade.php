@extends('layouts.masterShow')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de habitación
                    <a href="{{url('admin/habitaciones')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo de habitación</th>
                                    <td>{{$data->tipoHabitacion->title}}</td>
                                </tr>
                                <tr>
                                    <th>Titulo</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-primary">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection