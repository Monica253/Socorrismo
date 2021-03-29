<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiasTrabajo extends Model
{
    use HasFactory;

    protected $guarded=[];
	//protected $fillable = ['name', 'description', 'task_date'];

    protected $table="dias_trabajos";
	
	const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
	
	
	public function User(){
		return $this->belongsTo(User::class);
	}
	
	/*public function Empleado(){
		return $this->belongsTo(Empleado::class);
	}*/
	
	/*public function Hotel(){
		return $this->belongsTo(Hotel::class);
	}*/

	public function Centro(){
		return $this->belongsTo(Centro::class);
	}

	public function Piscina(){
		return $this->belongsTo(Piscina::class);
	}
}
