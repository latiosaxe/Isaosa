<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataaToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function($table) {
            $table->string('table_1')->nullable();
            $table->string('table_2')->nullable();
            $table->string('table_3')->nullable();
            $table->string('table_4')->nullable();
            $table->string('table_5')->nullable();
            $table->string('table_6')->nullable();
            $table->string('table_7')->nullable();
            $table->string('table_8')->nullable();
            $table->string('table_9')->nullable();
            $table->string('table_10')->nullable();

            $table->string('table_1_copy')->nullable();
            $table->string('table_2_copy')->nullable();
            $table->string('table_3_copy')->nullable();
            $table->string('table_4_copy')->nullable();
            $table->string('table_5_copy')->nullable();
            $table->string('table_6_copy')->nullable();
            $table->string('table_7_copy')->nullable();
            $table->string('table_8_copy')->nullable();
            $table->string('table_9_copy')->nullable();
            $table->string('table_10_copy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
