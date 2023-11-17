<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfha  Games</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
   

    <style>
        
.cards{
   
}


/*footer {
   margin-top:17%;
    bottom:0;
    left:0;
}*/
  /* Definir um tamanho fixo para os cartões de produto */
  .product-card {
    width: 250px;
    height: 400px;
  }

  /* Centralizar verticalmente o conteúdo dentro do cartão */
  .product-card .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }

  #searchForm {
    position: relative;
}

#searchInput {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group-append {
    position: absolute;
    right: 0;
    z-index: 2;
}

</style>




</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.png')}}" alt="Logo" class="img-fluid" style="max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
            <form id="searchForm" class="form-inline ml-4 col-6">
                <div class="input-group ">
                    <input id="searchInput" class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <div class="input-group-append">
                        <button class="btn btn-outline" type="button" onclick="pesquisarProduto()">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>  
            
            
            
        </div>
        <div class="ml-auto col-1">
            <a class="btn btn-sm ml-4" href="">
                <i class="fa fa-shopping-cart fa-lg "></i> 
            </a>
            </div>

          
    <div class="col-2">
    <i class="fas fa-user fa-lg"></i> Seja bem vindo, 
            <a href=""></a>
        

    </nav>
</header>
  <!-- Conteúdo da Página -->
  <div class="container my-4">
    <h2>Produtos em Destaque</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="produto-1.jpg" class="card-img-top" alt="Produto 1">
                <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1.</p>
                    <button class="btn btn-primary comprar" data-product="Produto 1">Comprar</button>
                    <button class="btn btn-success adicionar" data-product="Produto 1">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="produto-2.jpg" class="card-img-top" alt="Produto 2">
                <div class="card-body">
                    <h5 class="card-title">Produto 2</h5>
                    <p class="card-text">Descrição do Produto 2.</p>
                    <button class="btn btn-primary comprar" data-product="Produto 2">Comprar</button>
                    <button class="btn btn-success adicionar" data-product="Produto 2">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="produto-3.jpg" class="card-img-top" alt="Produto 3">
                <div class="card-body">
                    <h5 class="card-title">Produto 3</h5>
                    <p class="card-text">Descrição do Produto 3.</p>
                    <button class="btn btn-primary comprar" data-product="Produto 3">Comprar</button>
                    <button class="btn btn-success adicionar" data-product="Produto 3">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </div>
</div>

                  
    

<footer class="bg-dark text-light footer navbar-fixed-bottom">
        <div class="container py-3 mt-4">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Retornar à Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Suporte</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed necessitatibus id asperiores iste fugiat, praesentium obcaecati explicabo consequatur voluptatem eos earum blanditiis dolorem eaque veritatis libero? Magni, nam fugiat.
                    </p>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i class="fab fa-facebook fa-3x"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i class="fab fa-instagram fa-3x"></i></a>
                        </li>
                        <li class= "nav-item">
                            <a class="nav-link text-light" href="#"><i class="fab fa-twitter fa-3x"></i></a>
                        </li>
                        <li class= "nav-item">
                            <a class="nav-link text-light" href="#"><i class="fab fa-whatsapp fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center" style="background-color: #333; padding: 20px;">
            &copy; 2023 Copyright: <a href="#" class="text-light">Lojas Virtuais</a>
        </div>
    </footer>

</body>

<script>
    function pesquisarProduto() {
        // Obter o valor de pesquisa
        var searchTerm = document.getElementById("searchInput").value;

        // Redirecionar para a página de resultados de pesquisa (substitua 'resultados.html' pelo seu URL real)
        window.location.href = "?search=" + searchTerm;
    }
</script>


</html>