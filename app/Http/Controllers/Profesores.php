<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesor;

class Profesores extends Controller
{
    //
    public function index(){
        $profesores = Profesor::paginate(10);
        return view('profesores.listado', compact('profesores'));
    }

    public function create()
    {
        //
        return view('profesores.create');
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
        $datosProfesor = request()->except('_token');
        Profesor::insert($datosProfesor);
        
        return redirect('profesores/listado');
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
        $profesor=Profesor::findOrFail($id);
        return view('profesores.edit',compact('profesor'));
        
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
        $datosProfesor = request()->except('_token','_method');
        Profesor::where('codProfesor','=',$id)->update($datosProfesor);
        return redirect('profesores/listado');


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
        //Profesor::destroy($id);
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect('/profesores/listado');
    }
}
