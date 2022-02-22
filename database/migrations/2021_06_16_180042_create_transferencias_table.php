<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferenciasTable extends Migration
{
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('monto');
            $table->bigInteger('monto_total_cuenta_receptor');
            $table->bigInteger('monto_total_cuenta_emisor');
            $table->bigInteger('comision');
            $table->bigInteger('id_tipo');
            $table->bigInteger('id_receptor');
            $table->bigInteger('id_emisor');
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
        Schema::dropIfExists('transferencias');
    }
}
