<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clienteModel extends Model
{
    use HasFactory;
    protected $table = 'clientes'; 
    protected $primaryKey = 'nro_cliente';

    public function detalle()
    {
        return $this->hasMany(detalleModel::class,'nro_cliente');
    }
    
    public function pedido()
    {
        return $this->belongsTo(pedidoModel::class, 'id_pedido');
    }
}
