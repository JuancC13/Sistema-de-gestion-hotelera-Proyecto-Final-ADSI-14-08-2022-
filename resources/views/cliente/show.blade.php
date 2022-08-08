@extends('layouts.masterShow')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir nuevo cliente
                    <a href="{{url('admin/cliente')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{$data->full_name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Contraseña</th>
                                    <td>{{$data->password}}</td>
                                </tr>
                                <tr>
                                    <th>Celular</th>
                                    <td>{{$data->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td><img style="width: 30vw;" src="{{url('../storage/app/'.$data->photo)}}"></td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th>Noches</th>
                                    <td>{{$data->noches}}</td>
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