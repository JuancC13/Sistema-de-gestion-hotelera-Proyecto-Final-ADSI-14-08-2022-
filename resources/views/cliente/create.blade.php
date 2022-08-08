@extends('layouts.masterCreate')
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
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/cliente')}}">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre completo <span class="text-danger">*</span></th>
                                    <td><input type="text" name="full_name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Noches<span class="text-danger">*</span></th>
                                    <td><input type="text" name="noches" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Correo Electronico <span class="text-danger">*</span></th>
                                    <td><input type="email" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Contraseña <span class="text-danger">*</span></th>
                                    <td><input type="password" name="password" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Celular <span class="text-danger">*</span></th>
                                    <td><input type="text" name="mobile" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td><input type="file" name="photo"></td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td><textarea name="address" class="form-control"></textarea></td>
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