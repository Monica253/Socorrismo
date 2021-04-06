<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Centro;

use Illuminate\Support\Facades\Storage;

class CentroController extends Controller
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
        $centros = Centro::all();
        return view('admin.centros.index', compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.centros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return Storage::put('images', $request->file('file'));

        $request->validate([
            'nombre' => 'required|max:255',
            'email' => "required|unique:centros,email,$centro->id|max:255",
            'telefono' => "required|unique:centros,telefono,$centro->id",
            'direccion' => 'required',
            'horarios' => 'required',
            'slug' => 'required|unique:centros'
        ]);

        $centro = Centro::create($request->all());

        if($request->file('file')){
            $url = Storage::put('centros', $request->file('file'));

            $centro->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.centros.index', $centro)->with('message',trans('validation.attributes.Hotel added Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        //dd($centro->image());
        return view('admin.centros.show', compact('centro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Centro $centro)
    {
        //dd($centro);
        return view('admin.centros.edit', compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centro $centro)
    {

        $request->validate([
            'nombre' => 'required|max:255',
            'email' => "required|unique:centros,email,$centro->id|max:255",
            'telefono' => "required|unique:centros,telefono,$centro->id",
            'direccion' => 'required',
            'horarios' => 'required',
            'slug' => "required|unique:centros,slug,$centro->id|max:255"
        ]);

        $centro->update($request->all());

        if($request->file('file')){
            $url = Storage::put('centros', $request->file('file'));

            if($centro->image){
                Storage::delete($centro->image->url);

                $centro->image->update([
                    'url' => $url
                ]);
            }else{
                $centro->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.centros.index', $centro)->with('info',trans('validation.attributes.Hotel modified Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        if($centro->image){
            Storage::delete($centro->image->url);
        }

        $centro->delete();

        return redirect()->route('admin.centros.index')->with('error',trans('validation.attributes.Hotel removed Successfully'));
    }
}
