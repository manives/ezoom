<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        // Obter todos os produtos
        $produtos = Produto::all();
        $paginaAtual = 'produtos';

        // Retornar a resposta
        return view('produtos.produtos', compact('produtos', 'paginaAtual'));
    }

    public function store(Request $request)
    {
        try {
            // Lógica de validação e cadastro do produto

            // Verificar se todos os campos necessários estão presentes no request
            $request->validate([
                'nome' => 'required',
                'descricao' => 'required',
                'estoque' => 'required',
                'id_categoria' => 'required'
            ]);

            // Criar o produto
            $produto = Produto::create($request->all());

            // Retornar uma resposta de sucesso
            return redirect()->back()->with('success', 'Cadastro efetuado com sucesso!');
        } catch (\Exception $e) {
            // Redirecionar para uma página de erro ou exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao cadastrar o produto. Por favor, tente novamente.');
        }
    }

    public function create(Request $request)
    {
        // Obter todas as categorias
        $categorias = Categoria::all();
        $paginaAtual = 'produtos';

        // Retornar a resposta
        return view('produtos.produtos_create', compact('categorias', 'paginaAtual'));
    }

    public function show($id)
    {
        // Encontrar o produto com o ID especificado
        $produto = Produto::findOrFail($id);
        $paginaAtual = 'produtos';

        // Obter todas as categorias
        $categorias = Categoria::all();

        // Retornar a resposta
        return view('produtos.produtos_edit', compact('produto', 'categorias','paginaAtual'));
    }

    public function update(Request $request)
    {
        try {
            // Encontrar o produto com o ID especificado
            $produto = Produto::findOrFail($request->id);

            // Atualizar os dados do produto
            $produto->update($request->all());

            // Obter todos os produtos
            $produtos = Produto::all();
            $paginaAtual = 'produtos';

            // Retornar uma resposta de sucesso
            return redirect()->back()->with(['success' => 'Produto atualizado com sucesso!', 'paginaAtual' => $paginaAtual, 'produtos' => $produtos]);
        } catch (\Exception $e) {
            // Redirecionar para exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao atualizar o produto. Por favor, tente novamente.');
        }
    }

    public function destroy($id)
    {
        try {
            // Encontrar o produto com o ID especificado
            $produto = Produto::findOrFail($id);

            // Excluir o produto
            $produto->delete();

            // Obter todos os produtos
            $produtos = Produto::all();
            $paginaAtual = 'produtos';

            // Retornar uma resposta de sucesso
            return redirect()->back()->with(['success' => 'Produto excluído com sucesso!', 'paginaAtual' => $paginaAtual, 'produtos' => $produtos]);
        } catch (\Exception $e) {
            // Redirecionar para exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o produto. Por favor, tente novamente.');
        }
    }
}
