<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentosNegociacion extends Model
{
    use HasFactory;

    protected $table = "documentos_negociacion";
    
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a mucos inversa
    public function documentos(){
        return $this->belongsTo(Documentos::class);
    }

    public function negociacion(){
        return $this->belongsTo(Negociacion::class);
    }

    public function estados_procesos_documentos(){
        return $this->belongsTo(EstadosProcesosDocumentos::class);
    }
}
