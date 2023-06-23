@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Produto</h1>

                {{-- Exibir mensagem de sucesso, se existir --}}
                @if (session('success'))
                    <div class="alert alert-success success-alert">
                        {{ session('success') }}
                    </div>

                    {{-- Script para ocultar a mensagem de sucesso após 3 segundos --}}
                    <script>
                        setTimeout(function() {
                            var successAlert = document.querySelector('.success-alert');
                            if (successAlert) {
                                successAlert.style.display = 'none';
                            }
                        }, 3000);
                    </script>
                @endif

                {{-- Exibir mensagem de erro, se existir --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Formulário de edição do produto --}}
                <form action="{{ route('produtos_store') }}" method="POST" class="form-default">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="token" value="{{ request()->session()->all()['jwt_token'] }}">

                    {{-- Campo Nome --}}
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="" required>
                    </div>

                    {{-- Campo Descrição --}}
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                    </div>

                    {{-- Campo Estoque --}}
                    <div class="form-group">
                        <label for="estoque">Estoque</label>
                        <input type="number" class="form-control" id="estoque" name="estoque" value="" required>
                    </div>

                    {{-- Campo Categoria --}}
                    <div class="form-group">
                        <label for="id_categoria">Categoria</label>
                        <select id="id_categoria" name="id_categoria" class="form-control">
                            <option value="">Selecione uma categoria</option>
                            {{-- Loop para exibir as opções de categorias --}}
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Botão Salvar --}}
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
