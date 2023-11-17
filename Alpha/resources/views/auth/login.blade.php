<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Login</h1>
    
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf  
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="USUARIO_EMAIL" class="form-control" id="email" placeholder="Seu e-mail">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="USUARIO_SENHA" class="form-control" id="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    
    <p>Não tem uma conta? <a href="{{ url('/register') }}">Registre-se aqui</a></p>
</div>

</body>
</html>