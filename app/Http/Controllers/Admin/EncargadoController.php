<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Encargado;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::all();
        return view('admin.encargados.index', compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.encargados.create');
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
            'slug' => 'required|unique:encargados'
        ]);

        $encargado = Encargado::create($request->all());

        return redirect()->route('admin.encargados.index', $encargado)->with('info', 'Manager added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Encargado $encargado)
    {
        return view('admin.encargados.show', compact('encargado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Encargado $encargado)
    {
        return view('admin.encargados.edit', compact('encargado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encargado $encargado)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:encargados,slug,$encargado->id"
        ]);

        $encargado->update($request->all());

        return redirect()->route('admin.encargados.index', $encargado)->with('info', 'Manager modify successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encargado $encargado)
    {
        $encargado->delete();

        return redirect()->route('admin.encargados.index')->with('info', 'Manager removed successfully');
    }
}
