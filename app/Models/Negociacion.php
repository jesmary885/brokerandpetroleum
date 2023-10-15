<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negociacion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa
    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion uno a muchos inversa
    public function fase(){
        return $this->belongsTo(Fase::class);
    }

    //Relacion uno a muchos inversa
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    //Relacion muchos a muchos
    /*public function documento_negociacion(){
        return $this->belongsToMany(DocumentoNegociacion::class)->withPivot('documento_negociacion');
    }*/

    public function documentos(){
        return $this->belongsToMany(Documentos::class)->withPivot('status','id');
    }
}
