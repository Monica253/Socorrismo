<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DiasTrabajo;
//use App\Models\Encargado;
//use App\Models\Empleado;
use App\Models\Centro;
use App\Models\Piscina;
use App\Models\User;

class DiasTrabajoController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$encargados = Encargado::pluck('nombre', 'id');
        //$empleados = Empleado::pluck('nombre', 'id');
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        $dias = DiasTrabajo::all();

        return view('admin.dias.index', compact('dias', 'users', 'centros', 'piscinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$encargados = Encargado::pluck('nombre', 'id');
        //$empleados = Empleado::pluck('nombre', 'id');
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        return view('admin.dias.create', compact('encargados', 'users', 'piscinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dia = DiasTrabajo::create($request->all());

        return redirect()->route('admin.dias.index')->with('info', 'Laboral day added successfully');
        //return redirect()->route('admin.dias.edit', $dia)->with('info', 'Laboral day added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DiasTrabajo $dia)
    {
        return view('admin.dias.show', compact('dia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DiasTrabajo $dia)
    {
        //$encargados = Encargado::pluck('nombre', 'id');
        //$empleados = Empleado::pluck('nombre', 'id');
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        $dias = DiasTrabajo::all();

        return view('admin.dias.edit', $dia, compact('dias', 'dia', 'users','centros', 'piscinas'));
        //return view('admin.dias.edit', compact('dia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiasTrabajo $dia)
    {
        $dia->update($request->all());

        return redirect()->route('admin.dias.edit', $dia)->with('info', 'Day updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiasTrabajo $dia)
    {
        $dia->delete();

        return redirect()->route('admin.dias.index')->with('info', 'Day removed successfully');
    }
}
