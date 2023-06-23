@extends('layout.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Categoria</h1>

                <!-- Exibe a mensagem de sucesso -->
                @if (session('success'))
                    <div class="alert alert-success success-alert">
                        {{ session('success') }}
                    </div>

                    <!-- Script para esconder a mensagem de sucesso após 3 segundos -->
                    <script>
                        setTimeout(function() {
                            var successAlert = document.querySelector('.success-alert');
                            if (successAlert) {
                                successAlert.style.display = 'none';
                            }
                        }, 3000);
                    </script>
                @endif

            <!-- Exibe a mensagem de erro -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif

            <!-- Formulário de edição da categoria -->
                <form action="{{ route('categorias_store') }}" method="POST" class="form-default">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="token" value="{{ request()->session()->all()['jwt_token'] }}">

                    <!-- Campo de nome -->
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="" required>
                    </div>

                    <!-- Campo de descrição -->
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                    </div>

                    <!-- Botão de salvar -->
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
