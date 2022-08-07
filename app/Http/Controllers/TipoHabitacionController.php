<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoHabitacion;

class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=TipoHabitacion::all();
        return view('tipohabitacion.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipohabitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new TipoHabitacion;
        $data->title=$request->titulo;
        $data->price=$request->price;
        $data->derail=$request->detalle;
        $data->save();

        return redirect('admin/tipohabitacion/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=TipoHabitacion::find($id);
        return view('tipohabitacion.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=TipoHabitacion::find($id);
        return view('tipohabitacion.edit',['data'=>$data]);
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
        $data=TipoHabitacion::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->derail=$request->detalle;
        $data->save();

        return redirect('admin/tipohabitacion/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoHabitacion::where('id',$id)->delete();
        return redirect('admin/tipohabitacion')->with('success','Los datos se han eliminado.');
    }
}
