<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema</title>
    <!-- Importa o seu CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <!-- ABAS -->
        <div class="tabs">
            <a href="{{ route('login') }}" class="tab active">Login</a>
            <a href="{{ route('register') }}" class="tab">Cadastro</a>
        </div>

        <!-- FORMULÁRIO DE LOGIN -->
        <form method="POST" action="{{ route('login') }}" class="form active">
            @csrf
            <h1>Entrar</h1>

            <div class="input-group">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Seu e-mail" required autofocus>
                @if($errors->has('email'))
                    <span class="error-msg">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Sua senha" required>
                @if($errors->has('password'))
                    <span class="error-msg">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button type="submit" class="btn">Entrar</button>
            
            <div style="text-align: center; margin-top: 15px;">
                <a href="{{ route('password.request') }}" style="color: rgba(255,255,255,0.5); font-size: 13px; text-decoration: none;">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</body>
</html>
