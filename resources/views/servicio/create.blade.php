@extends('layouts.masterCreate')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir servicio
                    <a href="{{url('admin/servicio')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/servicio')}}">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Selecciona el tipo de servicio</th>
                                    <td>
                                        <select name="st_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($tipoServicio as $st)
                                                <option value="{{$st->id}}">{{$st->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Titulo</th>
                                    <td><input type="text" name="title" class="form-control"></td>
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