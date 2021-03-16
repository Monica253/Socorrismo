<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $table="centros";
	
	protected $guarded=[];
	
	public function getRouteKeyName(){
		return "slug";
	}

	const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
	
	public function DiasTrabajo(){
		return $this->hasMany(DiasTrabajo::class);
	}
}
