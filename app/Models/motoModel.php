<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motoModel extends Model
{
    use HasFactory;
    protected $table = 'motos'; 
    protected $primaryKey = 'nro_moto';

    public function estilo()
    {
        return $this->belongsTo(estiloModel::class,'id_estilo');
    }

}
