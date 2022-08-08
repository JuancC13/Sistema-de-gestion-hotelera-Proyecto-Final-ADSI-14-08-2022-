<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Servicio;
use App\Models\TipoServicio;
use App\Models\Habitacion;
use App\Models\TipoHabitacion;
use App\Models\Empleado;
use App\Models\TipoEmpleado;
use App\Models\Cliente;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tipoServicio = TipoServicio::sum('price')->groupBy('price')->get();
        $cliente=Cliente::all();
        $empleado=Empleado::all();
        $habitacion=Habitacion::all();
        $data=Servicio::all();
        $tipoServicio=TipoServicio::all();
        return view('factura.index',['data'=>$data,'tipoServicio'=>$tipoServicio, 'empleado'=>$empleado,'cliente'=>$cliente,'habitacion'=>$habitacion]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServicio=TipoServicio::all();
        $cliente=Cliente::all();
        $empleado=Empleado::all();
        $habitacion=Habitacion::all();
        return view('factura.create',[ 'tipoServicio'=>$tipoServicio, 'empleado'=>$empleado,'cliente'=>$cliente,'habitacion'=>$habitacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=new Servicio;
        $cliente=new Cliente;
        $empleado=new Empleado;
        $habitacion=new Habitacion;
        $data->tipo_servicio_id=$request->st_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/factura/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=Cliente::find($id);
        $empleado=Empleado::find($id);
        $habitacion=Habitacion::find($id);
        $data=Servicio::find($id);
        $tipoServicio=TipoServicio::find($id);
        return view('factura.show',['data'=>$data, 'tipoServicio'=>$tipoServicio,  'empleado'=>$empleado,'cliente'=>$cliente,'habitacion'=>$habitacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoServicio=TipoServicio::all();
        $cliente=Cliente::find($id);
        $empleado=Empleado::find($id);
        $habitacion=Habitacion::find($id);
        $data=Servicio::find($id);
        return view('factura.edit',['data'=>$data,'tipoServicio'=>$tipoServicio, 'empleado'=>$empleado,'cliente'=>$cliente,'habitacion'=>$habitacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Servicio::find($id);
        $cliente=Cliente::find($id);
        $empleado=Empleado::find($id);
        $habitacion=Habitacion::find($id);
        $data->tipo_servicio_id=$request->st_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/factura/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        factura::where('id',$id)->delete();
        return redirect('admin/factura')->with('success','Los datos se han eliminado.');
    }
}
