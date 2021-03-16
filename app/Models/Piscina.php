<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piscina extends Model
{
    use HasFactory;

    protected $table="piscinas";
	
	protected $guarded=[];

	public function getRouteKeyName(){
		return "slug";
	}
	
	const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
	
	/*public function Hotel(){
		return $this->belongsTo(Hotel::class);
	}*/

	public function Centro(){
		return $this->belongsTo(Centro::class);
	}

	public function DiasTrabajo(){
		return $this->hasMany(DiasTrabajo::class);
	}
}
