<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleModel extends Model
{
    use HasFactory;
    protected $table = 'detalles'; 
    protected $primaryKey = 'nro_detalle';

    public function pedido()
    {
        return $this->belongsTo(pedidoModel::class, 'id_pedido');
    }

    public function moto()
    {
        return $this->belongsTo(motoModel::class, 'id_moto');
    }
}
