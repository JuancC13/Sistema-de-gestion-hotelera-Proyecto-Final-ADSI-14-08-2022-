@extends('layouts.masterEdit')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de servicios
                    <a href="{{url('admin/servicio')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/servicio/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo de servicios</th>
                                    <td>
                                        <select name="st_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($tipoServicio as $st)
                                                <option @if($data->tipo_servicio_id==$st->id) selected @endif value="{{$st->id}}">{{$st->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Titulo</th>
                                    <td><input value="{{$data->title}}"  name="title" type="text" class="form-control"></td>
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