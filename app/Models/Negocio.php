<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table ='negocios';
    use HasFactory;

    protected $fillable = [
        'negocio_nombre',
        'negocio_direccion',
        'negocio_telefono',
        'negocio_whatsapp',
        'negocio_facebook',
        'negocio_tiktok',
        'negocio_map_code',
    ];

}
