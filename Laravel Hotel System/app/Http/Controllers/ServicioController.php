<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\TipoServicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Servicio::all();
        return view('servicio.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServicio=TipoServicio::all();
        return view('servicio.create',['tipoServicio'=>$tipoServicio]);
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
        $data->tipo_servicio_id=$request->st_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/servicio/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Servicio::find($id);
        return view('servicio.show',['data'=>$data]);
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
        $data=Servicio::find($id);
        return view('servicio.edit',['data'=>$data,'tipoServicio'=>$tipoServicio]);
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
        $data->tipo_servicio_id=$request->st_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/servicio/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicio::where('id',$id)->delete();
        return redirect('admin/servicio')->with('success','Los datos se han eliminado.');
    }
}
