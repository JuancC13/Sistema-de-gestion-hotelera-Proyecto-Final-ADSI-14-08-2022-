@extends('layouts.masterCreate')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de empleado
                    <a href="{{url('admin/tipoempleado')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/tipoempleado')}}">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <td><input type="text" name="title" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Precio</th>
                                    <td><input type="number" name="price" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Detalles</th>
                                    <td><textarea name="detail" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-primary">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection