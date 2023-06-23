<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $nomeCategorias = ['Camisetas', 'Vestidos', 'Calças'];
        $descCategorias = ['Categoria para as camisetas', 'Categoria para os vestidos', 'Categoria para as calças'];
        for ($i = 0; $i <= 2; $i++) {
            Categoria::create([
                'id' => $i,
                'nome' => $nomeCategorias[$i],
                'descricao' => $descCategorias[$i]
            ]);
        }
    }
}
