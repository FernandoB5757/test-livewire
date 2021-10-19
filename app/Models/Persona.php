<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
<<<<<<< HEAD
    //para crear usuario con menor codigo
    protected $fillable = [
        'user_id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'identificador',
        'correo',
        'telefono',
    ];

    //funcion para realizar join entre tablas Personas <-> Users

    public function user()//singular
    {
        return $this->belongsTo(User::class);
    }

    public function areas()//muchos a muchos
    {
        return $this->belongsToMany(Area::class);
    }
=======

    protected $fillable = [
        'user_id',
        'nombre',
        'apellido_p',
        'apellido_m',
        'identificador',
        'telfono',
        'correo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
}
