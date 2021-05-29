<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome_cliente', 100);
            $table->integer('subtotal')->nullable()->default(0);
            $table->integer('taxa_entrega')->nullable()->default(0);
            $table->string('estado')->nullable();
            $table->integer('total')->nullable()->default(0);
            $table->string('localEntrega');
            $table->string('dataEntrega');
            $table->string('horaEntrega');
            $table->string('moradaEntrega');
            $table->string('metodoPagamento');
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
        Schema::dropIfExists('pedidos');
    }
}
