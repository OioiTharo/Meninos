<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Loja Virtual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Ícones Font Awesome -->
    
<style>
    body {
        background-color: #f8f9fa;
        color: #495057;
        font-family: 'Arial', sans-serif;
        padding-bottom: 70px;
    }

    .navbar {
        background-color: #007bff;
    }

    .navbar-brand {
        color: #ffffff;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #ffffff;
    }

    .navbar-toggler-icon {
        background-color: #ffffff;
    }

    .form-inline .form-control {
        border: 1px solid #ced4da;
    }

    .form-inline .input-group-text {
        background-color: #007bff;
        border: 1px solid #007bff;
        color: #ffffff;
    }

    .container {
        margin-top: 20px;
    }

    h2 {
        color: #007bff;
    }

    .card {
        margin-bottom: 20px;
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-title {
        color: #343a40;
        font-weight: bold;
    }

    .card-text {
        color: #6c757d;
    }

    .btn-primary, .btn-success {
        width: 100%;
        margin-top: 10px;
    }

    .footer {
        background-color: #343a40;
        color: #ffffff;
        text-align: center;
        padding: 15px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>


</head>
<body style="padding-bottom: 70px;"> <!-- Adicione um espaço na parte inferior para acomodar o rodapé -->

    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Alpha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/categorias') }}">Categorias</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/perfil') }}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">Sair</a>
                </li>
            </ul>
        </div>
        <form class="form-inline ml-3">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
        <a class="btn  ml-2" href="{{route('carrinho.index')}}"><i class="fas fa-shopping-cart"></i> (0)</a>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container my-4">
        <h2>Produtos em Destaque</h2>
        <div class="row"> 
            @foreach ($produtos as $produto)
            <div class="col-md-4">
                <div class="card"> 
                   
                    <img src="{{ $produto->ProdutoImagens[0]->IMAGEM_URL }}" class="card-img-top" width="100%" height="400px"  alt="{{$produto->PRODUTO_NOME}}">
                    <div class="card-body">
                        
                        <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                        <p class="card-text">{{$produto->PRODUTO_PRECO}}</p>

                        <button class="btn btn-primary comprar" data-product="{{$produto->PRODUTO_NOME}}">Comprar</button>
                        <button class="btn btn-success adicionar" data-product="{{$produto->PRODUTO_NOME}}">Adicionar ao Carrinho</button>           
                    
                    </div>
                </div>
            </div>@endforeach
        </div>
    </div>

    <!-- Rodapé no final da página -->
    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <div class="container">
            &copy; 2023 Sua Loja Virtual - Todos os direitos reservados
        </div>
    </footer>

    <script>
        // Simulação de ação de compra
        $('.comprar').click(function() {
            var productName = $(this).data('product');
            alert('Você comprou: ' + productName);
        });

        // Simulação de ação de adicionar ao carrinho
        $('.adicionar').click(function() {
            var productName = $(this).data('product');
            alert('Você adicionou ao carrinho: ' + productName);
        });
    </script>
</body>
</html>