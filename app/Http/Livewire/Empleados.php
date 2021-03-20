<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;

class Empleados extends Component
{

    public $empleados, $title, $body, $post_id;
    public $isOpen = 0;

    public function render()
    {
        $this->empleados = Empleado::all();
        return view('livewire.empleados');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->nombre = '';
        $this->apellidos = '';
        $this->f_nacimiento = '';
        $this->direccion = '';
        $this->cod_postal = '';
        $this->telefono = '';
        $this->email = '';
        $this->dni = '';
        $this->num_seg_social = '';
        $this->num_cuenta = '';
        $this->banco = '';
        $this->fecha_alta = '';
        $this->fecha_baja = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'f_nacimiento' => 'required',
            'direccion' => 'required',
            'cod_postal' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'dni' => 'required',
            'num_seg_social' => 'required',
            'num_cuenta' => 'required',
            'banco' => 'required'
        ]);
   
        Empleado::updateOrCreate(['id' => $this->id], [
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'f_nacimiento' => $this->f_nacimiento,
            'direccion' => $this->direccion,
            'cod_postal' => $this->cod_postal,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'dni' => $this->dni,
            'num_seg_social' => $this->num_seg_social,
            'num_cuenta' => $this->num_cuenta,
            'banco' => $this->banco
        ]);
  
        session()->flash('message', 
            $this->id ? 'Employee Updated Successfully.' : 'Employee Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $this->id = $id;
        $this->nombre = $empleado->nombre;
        $this->apellidos = $empleado->apellidos;
        $this->f_nacimiento = $empleado->f_nacimiento;
        $this->direccion = $empleado->direccion;
        $this->cod_postal = $empleado->cod_postal;
        $this->telefono = $empleado->telefono;
        $this->email = $empleado->email;
        $this->dni = $empleado->dni;
        $this->num_seg_social = $empleado->num_seg_social;
        $this->num_cuenta = $empleado->num_cuenta;
        $this->banco = $empleado->banco;
        $this->fecha_alta = $empleado->fecha_alta;
        $this->fecha_baja = $empleado->fecha_baja;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Empleado::find($id)->delete();
        session()->flash('message', 'Employee Deleted Successfully.');
    }
}
