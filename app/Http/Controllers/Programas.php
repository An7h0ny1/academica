<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programa;

class Programas extends Controller
{
    //
    public function index(){

        $programas = Programa::paginate(10);
        return view('programas.listado', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosPrograma = request()->all();
        $datosPrograma = request()->except('_token');
        Programa::insert($datosPrograma);
        
        return redirect('programas/listado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $programa=Programa::findOrFail($id);
        //return redirect()->route('programas.listado');
        return view('programas.edit',compact('programa'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPrograma = request()->except('_token','_method');
        Programa::where('codPrograma','=',$id)->update($datosPrograma);
        return redirect('programas/listado');


        /*$programa=Programa::findOrFail($id);
        //return redirect()->route('programas.listado');
        return view('programas.edit',compact('programa'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Programa::destroy($id);
        return redirect('/programas/listado');
    }
}
