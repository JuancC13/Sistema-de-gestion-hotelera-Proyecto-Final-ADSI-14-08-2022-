@extends('layouts.masterShow')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de servicios
                    <a href="{{url('admin/factura')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <td>{{$d->id}}</td>
                                        
                                <tr>
                                    <th>Titulo</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Cliente</th>
                                    <td>{{$data->cliente}}</td>
                                </tr>
                                <tr>
                                    <th>Funcionario</th>
                                    <td>{{$data->funcionario}}</td>
                                </tr>
                                <tr>
                                    <th>Habitacion</th>
                                    <td>{{$data->habitacion}}</td>
                                </tr>
                                <tr>
                                    <th>Noches</th>
                                    <td>{{$data->noches}}</td>
                                </tr>
                                <tr>
                                    <th>Servicios</th>
                                    <td>{{$data->servicios}}</td>
                                </tr>
                                <tr>
                                    <th>Descuento</th>
                                    <td>{{$data->descuento}}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>{{$data->total}}</td>
                                </tr>
                                
                                <tr>
                                    <th>Tipo de servicio</th>
                                    <td>{{$data->tipoServicio->title}}</td>
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