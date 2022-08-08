@extends('layouts.masterEdit')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Añandir tipo de factura
                    <a href="{{url('admin/factura')}}" class="float-right btn btn-success btn-sm">Ver todo</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/factura/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    
                                

                                <tr>
                                    <th>Titulo</th>
                                    <td><input type="text" name="title" class="form-control" value="{{$data->title}}"></td>
                                
                                    <th>Selecciona el Cliente</th>
                                    <td>
                                        <select name="ct_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($cliente as $ct)
                                                <option @if($data->cliente_id==$ct->id) selected @endif value="{{$ct->id}}">{{$ct->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                               
                                    <th>Selecciona el funcionario que atiende</th>
                                    <td>
                                        <select name="ed_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($empleado as $ed)
                                            <option @if($data->empleado_id==$ed->id) selected @endif value="{{$ed->id}}">{{$ed->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <th>Selecciona la habitación que ocupo</th>
                                    <td>
                                        <select name="ht_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($habitacion as $ht)
                                                <option @if($data->habitacion_id==$ht->id) selected @endif value="{{$ht->id}}">{{$ht->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                
                                    <th>Selecciona el tipo de servicio</th>
                                    <td>
                                        <select name="st_id" class="form-control">
                                            <option value="0">--- Selecione ---</option>
                                            @foreach($tipoServicio as $st)
                                                <option @if($data->tipoServicio_id==$st->id) selected @endif value="{{$st->id}}">{{$st->title}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                
                                    <th>Noches de estancia</th>
                                    <td><input type="text" name="noches" class="form-control" value="{{$data->noches}}"></td>
                                
                                    <th>Costo de los servicios contratados</th>
                                    <td><input type="text" name="servicios" class="form-control" value="{{$data->servicios}}"></td>
                               
                                    <th>Descuento que se aplica</th>
                                    <td><input type="text" name="descuento" class="form-control" value="{{$data->descuento}}"></td>
                                
                                    <th>Total</th>
                                    <td><input type="text" name="total" class="form-control" value="{{$data->total}}"></td>
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