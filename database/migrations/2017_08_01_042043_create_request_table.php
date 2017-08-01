<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');

            $table->string('empresa');
            $table->string('rfc');
            $table->string('curp');
            $table->string('domicilio_fiscal');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('cp');
            $table->string('telefono_1');
            $table->string('telefono_2');
            $table->string('celular');
            $table->string('correo_electronico');
            $table->string('apoderado_legal');
            $table->string('nombre_del_contacto');
            $table->string('consumo_anual_de_fertilizante');
            $table->string('referencia_1_banco');
            $table->string('referencia_1_sucursal');
            $table->string('referencia_1_ejecutivo_de_cuenta');
            $table->string('referencia_1_telefono_1');
            $table->string('referencia_1_telefono_2');
            $table->string('referencia_1_celular');
            $table->string('referencia_1_ciudad');
            $table->string('referencia_1_municipio');
            $table->string('referencia_1_estado');
            $table->string('referencia_2_banco');
            $table->string('referencia_2_sucursal');
            $table->string('referencia_2_ejecutivo_de_cuenta');
            $table->string('referencia_2_telefono_1');
            $table->string('referencia_2_telefono_2');
            $table->string('referencia_2_celular');
            $table->string('referencia_2_ciudad');
            $table->string('referencia_2_municipio');
            $table->string('referencia_2_estado');
            $table->string('empresa_1_rfc');
            $table->string('empresa_1_domicilio_fiscal');
            $table->string('empresa_1_cp');
            $table->string('empresa_1_ciudad');
            $table->string('empresa_1_municipio');
            $table->string('empresa_1_telefono_1');
            $table->string('empresa_1_telefono_2');
            $table->string('empresa_1_celular');
            $table->string('empresa_1_correo_electronico');
            $table->string('empresa_1_nombre_del_contacto');
            $table->string('empresa_2_rfc');
            $table->string('empresa_2_domicilio_fiscal');
            $table->string('empresa_2_cp');
            $table->string('empresa_2_ciudad');
            $table->string('empresa_2_municipio');
            $table->string('empresa_2_telefono_1');
            $table->string('empresa_2_telefono_2');
            $table->string('empresa_2_celular');
            $table->string('empresa_2_correo_electronico');
            $table->string('empresa_2_nombre_del_contacto');

            $table->string('acta_constitutiva');
            $table->string('constancia_situacion_fiscal');
            $table->string('poder_notarial');
            $table->string('identificacion_oficial');
            $table->string('comprobante_curp');
            $table->string('formato_32_d');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request');
    }
}
