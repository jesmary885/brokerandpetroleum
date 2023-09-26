<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos polimoefica
    public function images(){
        return $this->morphMany(Images::class, "imageable");
    }

    //Relacion uno a muchos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function Solicitudes(){
        return $this->hasMany(Solicitudes::class);
    }

    public function negociaciones(){
        return $this->hasMany(Negociacion::class);
    }
}
