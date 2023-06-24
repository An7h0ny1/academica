<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = Estudiante::paginate(10);
        return view('estudiantes.listado', compact('estudiantes'));
    }
    public function create()
    {
        //
        return view('estudiantes.create');
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
        $datosEstudiante = request()->except('_token');
        Estudiante::insert($datosEstudiante);
        
        return redirect('estudiantes/listado');
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
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiantes.edit',compact('estudiante'));
        
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
        $datosEstudiante = request()->except('_token','_method');
        Estudiante::where('codEstudiante','=',$id)->update($datosEstudiante);
        return redirect('estudiantes/listado');


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
        Estudiante::destroy($id);
        /*$profesor = Profesor::findOrFail($id);
        $profesor->delete();*/
        return redirect('/estudiantes/listado');
    }
}
