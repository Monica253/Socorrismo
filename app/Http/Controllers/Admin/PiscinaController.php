<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Piscina;
use App\Models\Centro;

class PiscinaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piscinas = Piscina::all();
        return view('admin.piscinas.index', compact('piscinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centros = Centro::pluck('nombre', 'id');

        return view('admin.piscinas.create', compact('centros'));
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
            'nombre' => 'required',
            'slug' => 'required|unique:piscinas'
        ]);

        $piscina = Piscina::create($request->all());

        return redirect()->route('admin.piscinas.edit', $piscina)->with('info', 'Pool added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Piscina $piscina)
    {
        return view('admin.piscinas.show', compact('piscina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Piscina $piscina)
    {
        $centros = Centro::pluck('nombre', 'id');

        return view('admin.piscinas.edit', compact('piscina', 'centros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piscina $piscina)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:piscinas,slug,$piscina->id"
        ]);

        $piscina->update($request->all());

        return redirect()->route('admin.piscinas.edit', $piscina)->with('info', 'Pool updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piscina $piscina)
    {
        $piscina->delete();

        return redirect()->route('admin.piscinas.index')->with('info', 'Pool removed successfully');
    }
}
