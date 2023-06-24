<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Departamento;

class Departamentos extends Controller
{
    //
    public function index(){
        $departamentos = Departamento::paginate(10);
        return view('departamentos.listado', compact('departamentos'));
    }
}
