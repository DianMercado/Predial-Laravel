<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string("clave_catastral");
            $table->string("num_factura");
            $table->string("fecha_pago");
            $table->string("periodo_pago");
            $table->string("importe");
            $table->string("subtotal");
            $table->string("cm");
            $table->string("entero");
            $table->string("total_pago");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
