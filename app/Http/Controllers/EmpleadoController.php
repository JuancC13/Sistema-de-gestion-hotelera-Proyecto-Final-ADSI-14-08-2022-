<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEmpleado;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Empleado::all();
        return view('empleado.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEmpleado=TipoEmpleado::all();
        return view('empleado.create',['tipoEmpleado'=>$tipoEmpleado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Empleado;
        $data->tipo_empleado_id=$request->ep_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/empleado/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Empleado::find($id);
        return view('empleado.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoEmpleado=TipoEmpleado::all();
        $data=Empleado::find($id);
        return view('empleado.edit',['data'=>$data,'tipoEmpleado'=>$tipoEmpleado]);
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
        $data=Empleado::find($id);
        $data->tipo_empleado_id=$request->ep_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/empleado/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::where('id',$id)->delete();
        return redirect('admin/empleado')->with('success','Los datos se han eliminado.');
    }
}
