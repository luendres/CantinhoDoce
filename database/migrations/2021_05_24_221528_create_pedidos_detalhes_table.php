<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_detalhes', function (Blueprint $table) {
            $table->id();
            $table->integer('pedido_id');
            $table->integer('produto_id');
            $table->string('nome', 100);
            $table->integer('preco')->default(0);
            $table->integer('quantidade')->default(0);
            $table->integer('preco_total')->default(0);
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
        Schema::dropIfExists('pedidos_detalhes');
    }
}
