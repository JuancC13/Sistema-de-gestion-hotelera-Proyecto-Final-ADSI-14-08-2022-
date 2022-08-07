@extends('layouts.masterEdit')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de empleados
                    <a href="{{url('admin/empleado')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/empleado/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo de empleados</th>
                                    <td>
                                        <select name="ep_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($tipoEmpleado as $ep)
                                                <option @if($data->tipo_empleado_id==$ep->id) selected @endif value="{{$ep->id}}">{{$ep->title}}</option>
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