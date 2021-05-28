<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pedidos')->delete();

        \DB::table('pedidos')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 3,
                'nome_cliente' => 'Luísa Endres',
                'subtotal' => 8,
                'taxa_entrega' => 3,
                'estado' => 'Em processamento',
                'total' => 11,
                'created_at' => '2021-05-18 16:51:24',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 4,
                'nome_cliente' => 'Teste',
                'subtotal' => 10,
                'taxa_entrega' => 2,
                'estado' => 'Em processamento',
                'total' => 12,
                'created_at' => '2021-05-19 16:51:24',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 3,
                'nome_cliente' => 'Luísa Endres',
                'subtotal' => 15,
                'taxa_entrega' => 0,
                'estado' => 'Concluido',
                'total' => 15,
                'created_at' => '2021-05-19 20:32:33',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'user_id' => 5,
                'nome_cliente' => 'Ana',
                'subtotal' => 7,
                'taxa_entrega' => 3,
                'estado' => 'Concluido',
                'total' => 10,
                'created_at' => '2021-05-20 10:50:14',
                'updated_at' => NULL,
            ),
        ));
    }
}
