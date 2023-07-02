<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoModel extends Model
{
    use HasFactory;
    protected $table = 'pedidos'; 
    protected $primaryKey = 'nro_pedido';

    public function detalles()
    {
        return $this->hasMany(detalleModel::class,'nro_pedido');
    }

    public function cliente()
    {
        return $this->belongsTo(clienteModel::class, 'id_cliente');
    }

}
