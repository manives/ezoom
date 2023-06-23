@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categorias</h1>
                <a href="{{ 'categorias_create?token=' . request()->session()->all()['jwt_token'] }}" class="btn btn-primary">Nova Categoria</a>
                <br><br>

                {{-- Exibe mensagem de sucesso --}}
                @if (session('success'))
                    <div class="alert alert-success success-alert">
                        {{ session('success') }}
                    </div>

                    <script>
                        // Oculta a mensagem de sucesso após 3 segundos
                        setTimeout(function() {
                            var successAlert = document.querySelector('.success-alert');
                            if (successAlert) {
                                successAlert.style.display = 'none';
                            }
                        }, 3000);
                    </script>
                @endif

                {{-- Exibe mensagem de erro --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>{{ $categoria->descricao }}</td>
                            <td>
                                {{-- Botão de edição --}}
                                <a href="{{ 'categorias/' . $categoria->id . '?token=' . request()->session()->all()['jwt_token'] }}" class="btn btn-primary btn-sm">Editar</a>

                                {{-- Formulário de exclusão --}}
                                <form action="{{ route('categorias_destroy',['id' => $categoria->id, 'token' => request()->session()->all()['jwt_token']]) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir esta categoria?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
