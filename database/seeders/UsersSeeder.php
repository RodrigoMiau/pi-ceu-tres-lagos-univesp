<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'administrador_id' => 1,
            'name' => 'Rodrigo Miau',
            'cpf' => '12345678910',
            'email' => 'rodrigo@email.com',
            'password' => bcrypt('123456'),
            'ativo' => 1,
        ]);
    }
}
