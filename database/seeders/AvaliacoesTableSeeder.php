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
        
        
        
    }
}