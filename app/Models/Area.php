<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public $timestamps = false;//se define que no se agregara en timestamps

    public function personas()//muchos a muchos
    {
        return $this->belongsToMany(Persona::class);
    }
}
