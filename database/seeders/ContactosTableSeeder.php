<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contactos')->delete();
        
        \DB::table('contactos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-05-26 23:55:09',
                'updated_at' => '2021-05-26 23:55:09',
                'nome' => 'Teste',
                'email' => 'luendres@gmail.com',
                'mensagem' => 'oioioioi',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-05-27 00:02:27',
                'updated_at' => '2021-05-27 00:02:27',
                'nome' => 'Luísa Endres',
                'email' => 'luendres@gmail.com',
                'mensagem' => 'Olá! Este é um teste.',
            ),
        ));
        
        
    }
}