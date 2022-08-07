<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoServicio;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=TipoServicio::all();
        return view('tiposervicio.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiposervicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new TipoServicio;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/tiposervicio/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=TipoServicio::find($id);
        return view('tiposervicio.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=TipoServicio::find($id);
        return view('tiposervicio.edit',['data'=>$data]);
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
        $data=TipoServicio::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/tiposervicio/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoServicio::where('id',$id)->delete();
        return redirect('admin/tiposervicio')->with('success','Los datos se han eliminado.');
    }
}
