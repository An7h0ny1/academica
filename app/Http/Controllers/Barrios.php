<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barrio;

class Barrios extends Controller
{
    public function index(){
        $barrios = Barrio::paginate(10);
        return view('barrios.listado', compact('barrios'));
    }
}
