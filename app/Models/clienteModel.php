<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\clienteModel as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class clienteModel extends Model
{
    use HasFactory, HasApiTokens, Notifiable;    
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


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public $timestamps = false;
}
