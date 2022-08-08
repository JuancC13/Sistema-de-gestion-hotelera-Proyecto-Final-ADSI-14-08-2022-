@extends('layouts.masterIndex')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clientes
                    <a href="{{url('admin/cliente/create')}}" class="float-right btn btn-success btn-sm">Añadir nueva</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Foto</th>
                                <th>Dirección</th>
                                <th>Noches</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Foto</th>
                                <th>Dirección</th>
                                <th>Noches</th>
                                <th>Acción</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            
                            @if($data)
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->full_name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->mobile}}</td>
                                        <td><img style="width: 10vw;" src="{{url('../storage/app/'.$d->photo)}}"></td>
                                        <td>{{$d->address}}</td>
                                        <td>{{$d->noches}}</td>
                                        <td>
                                            <a href="{{url('admin/cliente/'.$d->id)}}" class=" btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/cliente/'.$d->id).'/edit'}}" class=" btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('¿Esta seguro que desea eliminar el registro selecionado?')" href="{{url('admin/cliente/'.$d->id).'/delete'}}" class=" btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    @section('scripts')
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    @endsection
@endsection