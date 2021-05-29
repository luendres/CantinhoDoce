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
        

        //\DB::table('avaliacoes')->delete();
        
        \DB::table('avaliacoes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Luisa',
                'produto_id' => 21,
                'nota' => 5,
                'avaliacao' => 'ótimo produto',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}