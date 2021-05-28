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
        User::create([
            'nome' => 'Nome do admin',
            'email' => 'admin2@cantinhodoce.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
            'email_verified_at' => now()->toDateString()
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
