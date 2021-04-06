<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DiasTrabajo;
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
        $users = User::pluck('name', 'id');
        $centros = Centro::pluck('nombre', 'id');
        $piscinas = Piscina::pluck('nombre', 'id');

        return view('admin.dias.create', compact('centros', 'users', 'piscinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required',
            'centro_id' => 'required',
            'piscina_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'horarios' => 'required',
        ]);

        $dia = DiasTrabajo::create($request->all());

        return redirect()->route('admin.dias.index')->with('message',trans('validation.attributes.Work day added Successfully'));
        //return redirect()->route('admin.dias.edit', $dia)->with('info', 'Laboral day added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DiasTrabajo $dia)
    {
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

        $request->validate([
            'user_id' => 'required',
            'centro_id' => 'required',
            'piscina_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'horarios' => 'required',
        ]);

        $dia->update($request->all());

        return redirect()->route('admin.dias.index', $dia)->with('info',trans('validation.attributes.Work day modified Successfully'));
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

        return redirect()->route('admin.dias.index')->with('error',trans('validation.attributes.Work day removed Successfully'));
    }
}
