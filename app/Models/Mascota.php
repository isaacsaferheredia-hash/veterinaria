<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';
    protected $fillable = [
        'nombreMascota',
        'especie',
        'raza',
        'edad',
        'sexo',
        'nombreDueño',
        'apellidoDueño',
        'telefono',
        'observaciones',
        'estado'
    ];

    static public function getMascotas(){
        return self::where('estado', 'activo')->get();
    }
    static public function getMascotabyId($id){
        return self::find($id);
    }
    static public function createMascota(array $data){
        return self::create($data);
    }
    static public function updateMascota($mascota, array $data){
        return $mascota->update($data);
    }

    static public function deleteMascota(Mascota $mascota){
        $mascota->estado='inactivo';
        $mascota->deleted_at =now();
        $mascota->save();
        return $mascota;
    }
}
