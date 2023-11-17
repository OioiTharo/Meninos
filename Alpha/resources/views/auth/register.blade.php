<!DOCTYPE html>
<html>
<head>
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
    
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        h1 {
            color: #007bff;
        }
    
        form {
            max-width: 400px;
            margin: 0 auto;
        }
    
        .form-group {
            margin-bottom: 20px;
        }
    
        label {
            font-weight: bold;
            color: #343a40;
        }
    
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }
    
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: #0056b3;
        }
    
        p {
            margin-top: 20px;
        }
    
        a {
            color: #007bff;
        }
    
        a:hover {
            color: #0056b3;
        }
    </style>
    
</head>
<body>

<div class="container">
    <h1>Cadastro</h1>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf  
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="USUARIO_NOME" id="nome" placeholder="Seu nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="USUARIO_EMAIL" placeholder="Seu e-mail">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="cpf" name="USUARIO_CPF" class="form-control" placeholder="Seu CPF">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control"name="USUARIO_SENHA" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    
    <p>Já tem uma conta? <a href="{{ url('/login') }}">Faça o login aqui</a></p>
</div>

</body>
</html>