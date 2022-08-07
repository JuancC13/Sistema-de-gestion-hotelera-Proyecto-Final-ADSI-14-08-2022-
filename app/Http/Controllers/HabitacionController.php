<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoHabitacion;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Habitacion::all();
        return view('habitacion.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoHabitacion=TipoHabitacion::all();
        return view('habitacion.create',['tipoHabitacion'=>$tipoHabitacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Habitacion;
        $data->tipo_habitacion_id=$request->rt_id;
        $data->title=$request->titulo;
        $data->save();

        return redirect('admin/habitaciones/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Habitacion::find($id);
        return view('habitacion.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoHabitacion=TipoHabitacion::all();
        $data=Habitacion::find($id);
        return view('habitacion.edit',['data'=>$data,'tipoHabitacion'=>$tipoHabitacion]);
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
        $data=Habitacion::find($id);
        $data->tipo_habitacion_id=$request->rt_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/habitaciones/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Habitacion::where('id',$id)->delete();
        return redirect('admin/habitaciones')->with('success','Los datos se han eliminado.');
    }
}
