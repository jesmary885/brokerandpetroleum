<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function Users(){
        return $this->hasMany(User::class);
    }

    public function provincias(){
        return $this->hasMany(Provincia::class);
    }
}
