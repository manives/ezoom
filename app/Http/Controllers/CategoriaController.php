<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        // Obtém todas as categorias do banco de dados
        $categorias = Categoria::all();

        // Define a página atual como 'categorias'
        $paginaAtual = 'categorias';

        // Retorna a resposta, passando as categorias e a página atual para a view
        return view('categorias.categorias', compact('categorias', 'paginaAtual'));
    }

    public function store(Request $request)
    {
        try {
            // Lógica de validação e cadastro da categoria

            // Verificar se todos os campos necessários estão presentes no request
            $request->validate([
                'nome' => 'required',
                'descricao' => 'required'
            ]);

            // Cria a nova categoria no banco de dados
            $categoria = Categoria::create($request->all());

            // Retorna uma resposta de sucesso
            return redirect()->back()->with('success', 'Cadastro efetuado com sucesso!');
        } catch (\Exception $e) {
            // Redireciona para uma página de erro ou exibe uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao cadastrar a categoria. Por favor, tente novamente.');
        }
    }

    public function create(Request $request)
    {
        // Define a página atual como 'categorias'
        $paginaAtual = 'categorias';

        // Retorna a view para criar uma nova categoria
        return view('categorias.categorias_create', compact('paginaAtual'));
    }

    public function show($id)
    {
        // Obtém a categoria com base no ID fornecido
        $categoria = Categoria::findOrFail($id);

        // Define a página atual como 'categorias'
        $paginaAtual = 'categorias';

        // Obtém todas as categorias do banco de dados
        $categorias = Categoria::all();

        // Retorna a view para editar a categoria, passando a categoria, a página atual e todas as categorias
        return view('categorias.categorias_edit', compact('categoria', 'paginaAtual', 'categorias'));
    }

    public function update(Request $request)
    {
        try {
            // Obtém a categoria com base no ID fornecido
            $categoria = Categoria::findOrFail($request->id);

            // Atualiza os dados da categoria com base nos dados recebidos
            $categoria->update($request->all());

            // Obtém todas as categorias do banco de dados
            $categorias = Categoria::all();

            // Define a página atual como 'categorias'
            $paginaAtual = 'categorias';

            // Retorna uma resposta de sucesso
            return redirect()->back()->with(['success' => 'Categoria atualizada com sucesso!', 'paginaAtual' => $paginaAtual, 'categorias' => $categorias]);
        } catch (\Exception $e) {
            // Redireciona para exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao atualizar a categoria. Por favor, tente novamente.');
        }
    }

    public function destroy($id)
    {
        try {
            // Obtém a categoria com base no ID fornecido
            $categoria = Categoria::findOrFail($id);

            // Exclui a categoria do banco de dados
            $categoria->delete();

            // Obtém todas as categorias do banco de dados
            $categorias = Categoria::all();

            // Define a página atual como 'categorias'
            $paginaAtual = 'categorias';

            // Retorna uma resposta de sucesso
            return redirect()->back()->with(['success' => 'Categoria excluída com sucesso!', 'paginaAtual' => $paginaAtual, 'categorias' => $categorias]);
        } catch (\Exception $e) {
            // Redireciona para exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir a categoria. Por favor, tente novamente.');
        }
    }
}
