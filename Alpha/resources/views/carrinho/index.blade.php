<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        button {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #bd2130;
        }

        #total {
            color: #28a745;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-success {
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Carrinho de Compras</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produto 1</td>
                <td>R$ 50.00</td>
                <td>
                    <button class="btn btn-danger" onclick="removerItem(this)">Remover</button>
                </td>
            </tr>
            <tr>
                <td>Produto 2</td>
                <td>R$ 30.00</td>
                <td>
                    <button class="btn btn-danger" onclick="removerItem(this)">Remover</button>
                </td>
            </tr>
            <tr>
                <td>Produto 3</td>
                <td>R$ 20.00</td>
                <td>
                    <button class="btn btn-danger" onclick="removerItem(this)">Remover</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-md-6">
            <h4>Total</h4>
        </div>
        <div class="col-md-6">
            <h4 id="total">R$ 0.00</h4>
        </div>
    </div>
    
    <div class="text-center">
        <button class="btn btn-success" onclick="comprarTodos()">Comprar Todos</button>
    </div>
</div>

<script>
    let total = 0.00;
    
    function calcularTotal() {
        let rows = document.querySelectorAll('table tbody tr');
        total = 0.00;
        rows.forEach(function(row) {
            let priceCell = row.querySelector('td:nth-child(2)');
            let price = parseFloat(priceCell.innerText.replace('R$', '').trim());
            total += price;
        });
        document.getElementById('total').innerText = `R$ ${total.toFixed(2)}`;
    }
    
    function comprarTodos() {
        if (total > 0) {
            alert('Compra de todos os itens realizada com sucesso!');
            let tbody = document.querySelector('table tbody');
            tbody.innerHTML = '';
            total = 0.00;
            document.getElementById('total').innerText = `R$ ${total.toFixed(2)}`;
        } else {
            alert('Carrinho vazio. Adicione itens antes de comprar.');
        }
    }

    function removerItem(button) {
        let row = button.parentElement.parentElement;
        row.remove();
        calcularTotal();
    }

    window.onload = calcularTotal;
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>