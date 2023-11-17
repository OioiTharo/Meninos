<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .card {
        margin-bottom: 20px;
        transition: transform 0.2s ease-in-out;
    }

    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sua Loja Virtual</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorias</a>
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
        <a class="btn btn-primary ml-2" href="#"><i class="fas fa-shopping-cart"></i> Carrinho (0)</a>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container my-4">
        <h2>Produtos</h2>

        <!-- Filtros e Ordenação -->
        <div class="row">
            <div class="col-md-3">
                <h4>Filtros</h4>
                <!-- Adicione seus filtros aqui -->
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Ordenar por:</h4>
                    <select class="form-control w-25">
                        <option value="relevancia">Relevância</option>
                        <option value="preco-crescente">Preço Crescente</option>
                        <option value="preco-decrescente">Preço Decrescente</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Lista de Produtos -->

        <div class="container my-4">
        <h2>Produtos em Destaque</h2>
        <div class="row"> 
            @foreach ($produtos as $produto)
            <div class="col-md-4">
                <div class="card"> 
                    @if($produto->ProdutoImagens->count() > 0)
                    <img src="{{ $produto->ProdutoImagens[0]->IMAGEM_URL }}" class="card-img-top" width="100%" height="400px"  alt="{{$produto->PRODUTO_NOME}}">
                    @else
                    <img src="" width="100%" height="400px" >
					@endif
                    <div class="card-body">
                        
                        <h5 class="card-title"><a class="card-text" href="{{route('produtos.show', $produto->PRODUTO_ID)}}">{{$produto->PRODUTO_NOME}}</a></h5>
                        <p class="card-text">{{$produto->PRODUTO_PRECO}}</p>

                        <button class="btn btn-primary">Comprar</button> 
                    
                    </div>
                </div>
            </div>@endforeach
        </div>
    </div>
    </div>
    
    <!-- Rodapé no final da página -->
    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <div class="container">
            &copy; 2023 Sua Loja Virtual - Todos os direitos reservados
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Ícones Font Awesome -->
</body>
</html