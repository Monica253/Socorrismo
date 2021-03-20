<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table="imagenes";

    protected $primaryKey = "imageable_id";

    protected $guarded = [];

    //Relación polimórfica
    public function imageable(){
        return $this->morphTo();
    }
}
