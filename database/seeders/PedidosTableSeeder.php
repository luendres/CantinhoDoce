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
        
        \DB::table('pedidos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'nome_cliente' => 'Luísa Endres',
                'subtotal' => 8,
                'taxa_entrega' => 3,
                'estado' => 'Em processamento',
                'total' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}