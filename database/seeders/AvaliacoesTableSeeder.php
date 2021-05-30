<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AvaliacoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('avaliacoes')->delete();
        
        \DB::table('avaliacoes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Luisa',
                'produto_id' => 12,
                'nota' => 5,
                'avaliacao' => 'Este bolo de chocolate é vida',
                'estado' => 1,
                'created_at' => '2021-05-30 00:14:27',
                'updated_at' => '2021-05-30 00:14:27',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Ana',
                'produto_id' => 26,
                'nota' => 5,
                'avaliacao' => 'O melhor doce que já comi',
                'estado' => 1,
                'created_at' => '2021-05-30 00:14:56',
                'updated_at' => '2021-05-30 00:14:56',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Sr Misterio',
                'produto_id' => 25,
                'nota' => 4,
                'avaliacao' => 'Eu amo estes rissóis, pena que engorda',
                'estado' => 1,
                'created_at' => '2021-05-30 00:15:43',
                'updated_at' => '2021-05-30 00:15:43',
            ),
        ));
        
        
    }
}