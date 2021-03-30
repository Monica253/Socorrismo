<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;
use App\Models\Piscina;

class PiscinaController extends Controller
{
    public function index()
    {
        $piscinas = Piscina::all();
        return view('piscinas.index', compact('piscinas'));
    }

    public function show(Piscina $piscina)
    {
        return view('piscinas.show', compact('piscina'));
    }
}
