<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $nomes = ['Estampa Flores da Manha', 'Imagens animais', 'Boca de Sino'];
        $descricoes = ['100% Algodão', '100% Algodão', '50% Jeans e 50% Lycra'];
        $estoques = [5,10,20];
        $idCategorias = [1,2,3];

        for ($i = 0; $i <= 2; $i++) {
            Produto::create([
                'nome' => $nomes[$i],
                'descricao' => $descricoes[$i],
                'estoque' => $estoques[$i],
                'id_categoria' => $idCategorias[$i],
            ]);
        }
    }
}
