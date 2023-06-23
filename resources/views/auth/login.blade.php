<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Importando jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <!-- Importando Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Importando arquivo CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Definindo altura total para o html e body */
        html, body {
            height: 100%;
        }

        body {
            /* Definindo imagem de fundo com repetição desabilitada e centralizada */
            background: #191d28 url(https://ezoom.com.br/image/resize?w=2740&h=821&src=userfiles/banners/ban4.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .card {
            /* Definindo cor de fundo do cartão */
            background: #658aa0;
        }

        .flex-container {
            /* Configurando o layout flex para o container */
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-content: center;
            align-content: center;
            -webkit-align-items: center;
            align-items: center;
            height: 100%;
            /* Aplicando o efeito de desfoque ao container */
            backdrop-filter: blur(10px);
        }

        .flex-item:nth-child(1) {
            /* Configurando o primeiro item flex para se alinhar à esquerda */
            -webkit-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: flex-end;
            align-self: flex-start;
        }

        .card-header span {
            /* Estilizando o texto "Login" no cabeçalho do cartão */
            float: right;
            color: white;
            text-transform: uppercase;
        }

        .card-body {
            /* Definindo cor de fundo para o corpo do cartão */
            background: #e2e2e2;
        }
    </style>
</head>
<body>

<!-- Container flexível -->
<div class="flex-container">
    <!-- Item flexível -->
    <div class="flex-item">
        <!-- Cartão -->
        <div class="card">
            <!-- Cabeçalho do cartão -->
            <div class="card-header">
                <!-- Ícone -->
                <svg xmlns="http://www.w3.org/2000/svg" width="142.89" height="23.902" viewBox="0 0 142.89 23.902">
                    <!-- Caminho SVG -->
                    <g id="Grupo_12" data-name="Grupo 12" transform="translate(-118.11 -101.098)">
                        <path id="Caminho_1" data-name="Caminho 1" d="M122.9,42.89a6.782,6.782,0,0,1-6.759-7.119,6.79,6.79,0,1,1,13.563,0,6.822,6.822,0,0,1-6.8,7.119m0-19.07c-6.936,0-12.488,4.969-12.488,11.951s5.552,11.951,12.488,11.951,12.534-4.923,12.534-11.951S129.88,23.82,122.9,23.82" transform="translate(54.76 77.278)" fill="#fff"></path>
                        <path id="Caminho_2" data-name="Caminho 2" d="M170.924,42.89a6.787,6.787,0,0,1-6.765-7.119,6.792,6.792,0,1,1,13.569,0,6.825,6.825,0,0,1-6.8,7.119m0-19.07c-6.942,0-12.494,4.969-12.494,11.951s5.552,11.951,12.494,11.951,12.534-4.929,12.534-11.951S177.906,23.82,170.924,23.82" transform="translate(34.199 77.278)" fill="#fff"></path>
                        <path id="Caminho_3" data-name="Caminho 3" d="M269.776,53.65a3.293,3.293,0,1,0,.011,0" transform="translate(-12.076 64.505)" fill="#38d430"></path>
                        <path id="Caminho_4" data-name="Caminho 4" d="M43.755,32.912H34.406a.274.274,0,0,1-.229-.337A5.455,5.455,0,0,1,39.7,28.229a4.432,4.432,0,0,1,4.289,4.4.274.274,0,0,1-.234.286M39.7,23.82c-6.862,0-11.591,4.923-11.591,11.951,0,6.49,4.7,11.951,12.265,11.951a14.1,14.1,0,0,0,8.2-2.642,1.355,1.355,0,0,0,.366-1.807l-.984-1.624a1.361,1.361,0,0,0-1.91-.446,9.824,9.824,0,0,1-5.272,1.715,6.656,6.656,0,0,1-6.81-5.987c0-.137.091-.429.229-.429H47.952a1.715,1.715,0,0,0,1.87-1.715V34.6c0-6.044-3.585-10.767-10.121-10.767" transform="translate(90 77.278)" fill="#fff"></path>
                        <path id="Caminho_5" data-name="Caminho 5" d="M89.881,39.973H86.621c-.52,0-.572.606-.572,1.144v.166c0,.675-.572,1.006-1.2,1.006H79.416a.715.715,0,0,1-.572-1.144c.206-.269.452-.572.732-.921l9.652-11.968a2.968,2.968,0,0,0,.572-1.984A1.938,1.938,0,0,0,87.879,24.3H73.372c-2.15,0-3.013.886-3.013,2.991v3.2c0,.572.189.989.743.989h3.374a.766.766,0,0,0,.778-.789V30.3a1.144,1.144,0,0,1,1.252-1.1h4.689c.423,0,1.012.395.269,1.218-.326.349-10.624,12.98-10.624,12.98a2.287,2.287,0,0,0-.48,1.487v.029a2.022,2.022,0,0,0,1.9,2.242H87.965c2.1,0,2.962-.978,2.962-3.122v-2.9a1.207,1.207,0,0,0-1.046-1.144" transform="translate(71.91 77.073)" fill="#fff"></path>
                        <path id="Caminho_6" data-name="Caminho 6" d="M227.205,23.82a9.178,9.178,0,0,0-6.141,2.39,8.165,8.165,0,0,0-5.8-2.367,8.806,8.806,0,0,0-8.8,8.657V45.651a1.635,1.635,0,0,0,1.63,1.63h1.961a1.635,1.635,0,0,0,1.635-1.63V32.5c0-1.658,1.8-3.162,3.62-3.162a3.179,3.179,0,0,1,3.236,3.082V45.789a1.63,1.63,0,0,0,1.63,1.63h1.961a1.635,1.635,0,0,0,1.63-1.63V32.5c0-1.658,1.8-3.162,3.625-3.162a3.174,3.174,0,0,1,3.231,3.082V45.651a1.635,1.635,0,0,0,1.635,1.63h1.961a1.635,1.635,0,0,0,1.63-1.63V32.437a8.537,8.537,0,0,0-8.64-8.617" transform="translate(13.633 77.279)" fill="#fff"></path></g></svg>
                <!-- Título do cabeçalho -->
                <span>Login</span>
            </div>
            <div class="card-body">
                <!-- Verifica se há uma mensagem de sucesso na sessão -->
                @if (session('success'))
                    <div class="alert alert-success success-alert">
                        <!-- Exibe a mensagem de sucesso -->
                        {{ session('success') }}
                    </div>

                    <script>
                        // Exibe a mensagem de sucesso por 3 segundos e depois a oculta
                        setTimeout(function() {
                            var successAlert = document.querySelector('.success-alert');
                            if (successAlert) {
                                successAlert.style.display = 'none';
                            }
                        }, 3000);
                    </script>
                @endif
            <!-- Verifica se há erros de validação -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <!-- Exibe os erros de validação -->
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!-- Formulário de login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                        <div class="col-md-12">
                            <!-- Campo de entrada de e-mail -->
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <!-- Exibe a mensagem de erro para o campo de e-mail -->
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                        <div class="col-md-12">
                            <!-- Campo de entrada de senha -->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <!-- Exibe a mensagem de erro para o campo de senha -->
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <!-- Botão de login -->
                            <button type="submit" class="btn btn-primary btn-block">
                                Entrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>
