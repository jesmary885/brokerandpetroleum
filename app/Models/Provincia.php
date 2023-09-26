<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function Users(){
        return $this->hasMany(User::class);
    }
    
    //Relacion uno a muchos inversa
    public function country(){
        return $this->belongsTo(Country::class);
    }

}
