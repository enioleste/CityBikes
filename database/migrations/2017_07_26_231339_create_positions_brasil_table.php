<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsBrasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('positions_brasil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cidade');
            $table->string('pais'); //city
            $table->string('latitude');
            $table->string('longitude');
            $table->string('nome_estabelecimento'); //company

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('positions_brasil');
    }
}
