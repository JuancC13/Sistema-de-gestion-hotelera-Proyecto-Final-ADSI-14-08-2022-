<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEmpleado;

class TipoEmpleadoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=TipoEmpleado::all();
        return view('tipoempleado.index',['data'=>$data]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoempleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new TipoEmpleado;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/tipoempleado/create')->with('success','Los datos se han guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=TipoEmpleado::find($id);
        return view('tipoempleado.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=TipoEmpleado::find($id);
        return view('tipoempleado.edit',['data'=>$data]);
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
        $data=TipoEmpleado::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/tipoempleado/'.$id.'/edit')->with('success','Los datos se han actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoEmpleado::where('id',$id)->delete();
        return redirect('admin/tipoempleado')->with('success','Los datos se han eliminado.');
    }
}
