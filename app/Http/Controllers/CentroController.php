<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;
use App\Models\Piscina;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return view('centros.index', compact('centros'));
    }

    public function show(Centro $centro)
    {
        $piscinas = Piscina::pluck('nombre', 'id');
        
        return view('centros.show', compact('centro', 'piscinas'));
    }
}
