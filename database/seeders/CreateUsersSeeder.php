<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nome' => 'Admin',
                'email' => 'admin@cantinhodoce.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'nome' => 'User',
                'email' => 'normal@cantinhodoce.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
