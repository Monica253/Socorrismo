<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiasTrabajo;
use App\Models\Centro;
use App\Models\Piscina;
use App\Models\User;

class DiasTrabajoController extends Controller
{
    public function index()
    {
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        $dias = DiasTrabajo::where('user_id', auth()->id())->get();
        //$dias = DiasTrabajo::where('user_id', auth()->user()->id);
        //$dias = DiasTrabajo::find(auth()->id());

        return view('calendar.index', compact('dias', 'users', 'centros', 'piscinas'));
    }

    public function show(DiasTrabajo $dia)
    {
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        $dias = DiasTrabajo::where('user_id', auth()->id())->get();

        return view('calendar.show', compact('dia', 'dias', 'users', 'centros', 'piscinas'));
    }
}
