<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <!-- Inclua as bibliotecas do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Arial', sans-serif;
            margin-top: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        p {
            color: #6c757d;
            font-size: 16px;
            line-height: 1.5;
        }

        button.btn-primary {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #218838;
        }

        .carousel-inner {
            border-radius: 15px;
            overflow: hidden;
        }

        .carousel-item img {
            width: 100%;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Seção de imagens detalhadas -->
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if($produto->ProdutoImagens->count() > 0)
                        <div class="carousel-item active">
                            <img src="{{ $produto->ProdutoImagens[0]->IMAGEM_URL }}" class="d-block w-100" alt="Imagem 1">
                        </div> <!--
                        @elseif($produto->ProdutoImagens->count() === 1)
                        <div class="carousel-item">
                            <img src="{{ $produto->ProdutoImagens[1]->IMAGEM_URL }}" class="d-block w-100" alt="Imagem 2">
                        </div>
                        @elseif($produto->ProdutoImagens->count() === 2)
                        <div class="carousel-item">
                            <img src="{{ $produto->ProdutoImagens[2]->IMAGEM_URL }}" class="d-block w-100" alt="Imagem 2">
                        </div>
                        @elseif($produto->ProdutoImagens->count() === 3)
                        <div class="carousel-item">
                            <img src="{{ $produto->ProdutoImagens[3]->IMAGEM_URL }}" class="d-block w-100" alt="Imagem 2">
                        </div>-->
                        @else
                        <div class="carousel-item">
							<img src="" width="100%" height="200">
                        </div>
						@endif
                        <!-- Adicione mais imagens conforme necessário -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Seção de descrição e preço -->
                <h2>{{$produto->PRODUTO_NOME}}</h2>
                <p>{{$produto->PRODUTO_DESC}}</p>
                <p>Preço: {{$produto->PRODUTO_PRECO}}</p>
                <!-- Botão de compra -->
                <button class="btn btn-primary">Comprar</button>
            </div>
        </div>
    </div>

    <!-- Inclua o JavaScript do Bootstrap no final do arquivo para um melhor desempenho -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>