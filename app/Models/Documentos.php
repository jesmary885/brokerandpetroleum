<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa
    public function fase(){
        return $this->belongsTo(Fase::class);
    }

    public function documentos(){
        return $this->belongsToMany(Documentos::class)->withPivot('status','id');
    }
}
