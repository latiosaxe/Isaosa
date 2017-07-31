<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'uid',
        'regimen_de_ventas',
        'regimen_fiscal',
        'comprobante_de_domicilio',
        'constancia_situacion_fiscal'
    ];
}
