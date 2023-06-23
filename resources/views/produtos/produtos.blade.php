@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Produtos</h1>
                <!-- Link para criar um novo produto -->
                <a href="{{ 'produtos_create?token=' . request()->session()->all()['jwt_token'] }}" class="btn btn-primary">Novo Produto</a>
                <br><br>

                <!-- Mensagem de sucesso -->
                @if (session('success'))
                    <div class="alert alert-success success-alert">
                        {{ session('success') }}
                    </div>

                    <script>
                        setTimeout(function() {
                            var successAlert = document.querySelector('.success-alert');
                            if (successAlert) {
                                successAlert.style.display = 'none';
                            }
                        }, 3000);
                    </script>
                @endif

            <!-- Mensagem de erro -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif

            <!-- Tabela de produtos -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Estoque</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Loop pelos produtos -->
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->estoque }}</td>
                            <td>{{ $produto->id_categoria }}</td>
                            <td>
                                <!-- Link para editar o produto -->
                                <a href="{{ 'produtos/' . $produto->id . '?token=' . request()->session()->all()['jwt_token'] }}" class="btn btn-primary btn-sm">Editar</a>
                                <!-- Formulário para excluir o produto -->
                                <form action="{{ route('produtos_destroy',['id' => $produto->id, 'token' => request()->session()->all()['jwt_token']]) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir este produto?')">Excluir</button>
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
