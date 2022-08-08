@extends('layouts.masterCreate')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir factura
                    <a href="{{url('admin/factura')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/factura')}}">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <td><input type="text" name="title" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Selecciona el Cliente</th>
                                    <td>
                                        <select name="ct_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($cliente as $ct)
                                                <option value="{{$ct->id}}">{{$ct->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Selecciona el funcionario que atiende</th>
                                    <td>
                                        <select name="ed_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($empleado as $ed)
                                                <option value="{{$ed->id}}">{{$ed->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Selecciona la habitación que ocupo</th>
                                    <td>
                                        <select name="ht_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($habitacion as $ht)
                                                <option value="{{$ht->id}}">{{$ht->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
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
                                    <th>Noches de estancia</th>
                                    <td><input type="text" name="noches" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Costo de los servicios contratados</th>
                                    <td><input type="text" name="servicios" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Descuento que se aplica</th>
                                    <td><input type="text" name="descuento" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td><input type="text" name="total" class="form-control"></td>
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