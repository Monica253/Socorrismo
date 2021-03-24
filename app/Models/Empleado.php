<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Empleado as Authenticatable; //Add this

class Empleado extends Authenticatable
{
    use HasFactory;

    protected $table="empleados";
	
	protected $guarded=[];

	protected $hidden = [
		'employee_password', 'remember_token',
	];

	public function getAuthPassword()
    {
     	return $this->employee_password;
    }
	
	public function getRouteKeyName(){
		return "slug";
	}

	const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
	
	public function DiasTrabajo(){
		return $this->hasMany(DiasTrabajo::class);
	}
}
