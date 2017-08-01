<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->string('regimen_de_ventas');
            $table->string('regimen_fiscal');

            $table->string('razon_social');
            $table->string('rfc');
            $table->string('curp');
            $table->string('titulo');
            $table->string('complete_name');
            $table->string('job');
            $table->string('tel');
            $table->string('cel');
            $table->string('email');

            $table->string('addres_stret');
            $table->string('addres_colonia');
            $table->string('addres_city');
            $table->string('addres_cp');
            $table->string('addres_municipio');
            $table->string('addres_state');
            $table->string('addres_country');
            $table->string('addres_tel');
            $table->string('addres_tel2');
            $table->string('addres_cel');
            $table->string('addres_website');
            $table->string('addres_email');
            $table->string('addres_contact');
            
            
            $table->string('comprobante_de_domicilio');
            $table->string('constancia_situacion_fiscal');
            $table->timestamps();

//            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
