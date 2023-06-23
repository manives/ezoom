{{--Verificando se o usuário está logado ou não.--}}
@if (Auth::check())
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Inclui o arquivo CSS personalizado -->
</head>

<body>
@include('topbar') <!-- Inclui a barra superior -->

<div class="dashboard-container">
@include('sidebar') <!-- Inclui a barra lateral -->

    <div class="content">
        <!-- Conteúdo a ser exibido apenas na rota especificada -->
        {{$paginaAtual == 'dashboard' ? 'Nesta área ficarão todas as informações pertinentes do sistema, como totalizadores e gráficos rápidos.' : ''}}
        @yield('content') <!-- Renderiza o conteúdo específico da página -->
    </div>
</div>

@include('bottombar') <!-- Inclui a barra inferior -->
</body>

</html>
@else
    <p>Por favor, <a href="{{ route('login') }}">efetue um novo login</a> para continuar.</p>
@endif
