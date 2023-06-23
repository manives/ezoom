<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Inserir usuário 1
        DB::table('users')->insert([
            'name' => 'Manoel Carvalho',
            'email' => 'manoel.carvalho@ezoom.com.br',
            'password' => Hash::make('senha123'),
        ]);

        // Inserir usuário 2
        DB::table('users')->insert([
            'name' => 'Rodrigo Rossa',
            'email' => 'rodrigo.rossa@ezoom.com.br',
            'password' => Hash::make('senha456'),
        ]);

        // Inserir usuário 3
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@ezoom.com.br',
            'password' => Hash::make('senha789'),
        ]);

        // Inserir mais usuários...
    }
}
