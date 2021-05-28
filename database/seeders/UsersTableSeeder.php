<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Admin',
                'email' => 'admin@cantinhodoce.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$F3XdH1umaJm3K3q2DXTeweP5i8LdhTJ4UMG3t4qepjNwVkNQoMp2i',
                'remember_token' => NULL,
                'created_at' => '2021-05-13 15:15:42',
                'updated_at' => '2021-05-13 15:15:42',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'User',
                'email' => 'normal@cantinhodoce.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ehf4p3h98jh.iIoTNNnrmuu3Ntm8DKZ618xht.AHHyFLuJ8BsoSi.',
                'remember_token' => NULL,
                'created_at' => '2021-05-13 15:15:42',
                'updated_at' => '2021-05-13 15:15:42',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Luísa',
                'email' => 'luendres@gmail.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$pgafH.G7/bXDlBh27dJ5R.94uRaS4SPR1hgb44nYzWXMfpsjNUZge',
                'remember_token' => NULL,
                'created_at' => '2021-05-13 15:54:30',
                'updated_at' => '2021-05-13 15:54:30',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Teste',
                'email' => 'teste@ad.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$KexqyrkqcQ8x/fCmhZn3NetokvFfA4NYDyYx6Mr9CkpZDdMZz67HO',
                'remember_token' => NULL,
                'created_at' => '2021-05-22 18:12:12',
                'updated_at' => '2021-05-22 18:12:12',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'teste',
                'email' => 'teste@teste.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$7p18nCId/aCcx9aVXZ9y4eN5dY9709OtWNnHdTe4glwrH9DG1J5dG',
                'remember_token' => NULL,
                'created_at' => '2021-05-22 18:25:47',
                'updated_at' => '2021-05-22 18:25:47',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'ultimo',
                'email' => 'ultimo@ultimo.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$zkOStZDmuio8hyBvOP3/6uncEv6abRiWgir/.HtWPfUUsPzBx00cu',
                'remember_token' => NULL,
                'created_at' => '2021-05-22 18:42:52',
                'updated_at' => '2021-05-22 18:42:52',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Maria',
                'email' => 'mariiajmsantoos@gmail.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$5naNoDrguWKygrr9gaNwgeMoY7x0TdDeW5N0tyS/dgN5R9U/kJjhK',
                'remember_token' => NULL,
                'created_at' => '2021-05-28 09:52:57',
                'updated_at' => '2021-05-28 09:52:57',
            ),
            7 => 
            array (
                'id' => 9,
                'nome' => 'Nome do admin',
                'email' => 'admin2@cantinhodoce.com',
                'telemovel' => NULL,
                'morada' => NULL,
                'postal' => NULL,
                'cidade' => NULL,
                'is_admin' => 1,
                'email_verified_at' => '2021-05-28 00:00:00',
                'password' => '$2y$10$YpTrd0kbrZIM5tqYvs2vkuJ3C8YG/WsuF20Ndr3rez5ipk5xMcoCW',
                'remember_token' => NULL,
                'created_at' => '2021-05-28 16:27:30',
                'updated_at' => '2021-05-28 16:27:30',
            ),
        ));
        
        
    }
}