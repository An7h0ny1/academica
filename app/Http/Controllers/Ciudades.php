<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ciudad;

class Ciudades extends Controller
{
    //
    public function index(){
        $ciudades = Ciudad::paginate(10);
        return view('ciudades.listado', compact('ciudades'));
    }
}
