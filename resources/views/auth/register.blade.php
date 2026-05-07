<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <!-- ABAS -->
        <div class="tabs">
            <a href="{{ route('login') }}" class="tab">Login</a>
            <a href="{{ route('register') }}" class="tab active">Cadastro</a>
        </div>

        <!-- FORMULÁRIO DE CADASTRO -->
        <form method="POST" action="{{ route('register') }}" class="form active">
            @csrf
            <h1>Cadastrar</h1>

            <div class="input-group">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Seu nome" required>
                @if($errors->has('name'))
                    <span class="error-msg">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="input-group">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Seu e-mail" required>
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

            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Confirme a senha" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>
