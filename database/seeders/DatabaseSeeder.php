<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        Artisan::call("storage:link");
        $this->call(AvaliacoesTableSeeder::class);
        $this->call(PedidosTableSeeder::class);
    }
}
