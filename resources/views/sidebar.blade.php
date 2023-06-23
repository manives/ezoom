<div class="sidebar">
    <!-- Mensagem de boas-vindas -->
    <div class="welcome-message">
        <div class="d-flex align-items-center">
            MENU
        </div>
    </div>

    <!-- Lista de links de navegação -->
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <!-- Link para a página de Dashboard -->
            <a class="nav-link {{$paginaAtual == 'dashboard' ? 'active' : ''}}" href="{{ route("dashboard", ['token' => request()->session()->all()["jwt_token"]]) }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <!-- Link para a página de Produtos -->
            <a class="nav-link {{$paginaAtual == 'produtos' ? 'active' : ''}}" href="{{ route("produtos", ['token' => request()->session()->all()["jwt_token"]]) }}">Produtos</a>
        </li>
        <li class="nav-item">
            <!-- Link para a página de Categorias -->
            <a class="nav-link {{$paginaAtual == 'categorias' ? 'active' : ''}}" href="{{ route("categorias", ['token' => request()->session()->all()["jwt_token"]]) }}">Categorias</a>
        </li>
        <li class="nav-item">
            <!-- Link para a página de Logout -->
            <a class="nav-link" href="{{ route("logout", ['token' => request()->session()->all()["jwt_token"]]) }}">Sair</a>
        </li>
    </ul>
</div>
