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
        'razon_social',
        'rfc',
        'curp',
        'titulo',
        'complete_name',
        'job',
        'tel',
        'cel',
        'email',
        'addres_stret',
        'addres_colonia',
        'addres_city',
        'addres_cp',
        'addres_municipio',
        'addres_state',
        'addres_country',
        'addres_tel',
        'addres_tel2',
        'addres_cel',
        'addres_website',
        'addres_email',
        'addres_contact',
        'constancia_situacion_fiscal',
    ];


}
