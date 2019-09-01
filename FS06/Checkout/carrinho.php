<?php
    require('classes/Produto.php');
    require('classes/ItemCarrinho.php');
    require('classes/Carrinho.php');

    $nomeProduto1 = $_POST["name"][0]; 
    $descricaoProduto1 = $_POST["description"][0]; 
    $valorProduto1 = $_POST["price"][0];
    $quantidadeProduto1 = $_POST["quantity"][0]; 

    $produto1 = new Produto($nomeProduto1, $descricaoProduto1, $valorProduto1);
    $item1 = new ItemCarrinho($produto1, $quantidadeProduto1);
    $carrinho = new Carrinho($item1);

    for($i = 1; $i < count($_POST['name']); $i++) {
        $nomeProduto = $_POST["name"][$i]; 
        $descricaoProduto = $_POST["description"][$i]; 
        $valorProduto = $_POST["price"][$i];
        $quantidadeProduto = $_POST["quantity"][$i]; 
        
        $produto = new Produto($nomeProduto, $descricaoProduto, $valorProduto);
        $item = new ItemCarrinho($produto, $quantidadeProduto);

        $carrinho->adicionarItem($item);
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/ecommerce.css">
    <title>Meu E-commerce Bacanudo</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Meu ecommerce bacanudo</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.html">Lorem</a>
            <a class="p-2 text-dark" href="#">Ipsum</a>
            <a class="p-2 text-dark" href="#">Dolor</a>
            <a id="place-order" class="p-2 text-dark" href="#">Ver carrinho</a>
        </nav>
    </div>
    
    <div class="container">
        <h2>Carrinho</h2>

        <div class="row">
            <div class="col-md-8">  
                <ul class="list-group">
                    <?php foreach($carrinho->listarItens() as $item) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item->getProduto()->getNome(); ?></h6>
                                <p><small class="text-muted"><?php echo $item->getProduto()->getDescricao(); ?></small></p>
                                <p><small>Quantidade: <?php echo $item->getQuantidade(); ?></small></p>
                            </div>
                            <span class="text-muted">R$ <?php echo $item->subtotal(); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <h5>Resumo</h5>
                    <div class="list-group-item d-flex">
                        <strong>TOTAL:</strong> R$ <?php echo $carrinho->total(); ?>
                    </div>
                    <div class="list-group-item d-flex">
                        <div class="col-md-12">
                            <form action="comprar.php" method="POST">
                                <div class="form-group">
                                    <label for="input-cliente">Cliente</label>
                                    <input name="input-cliente" type="text" class="form-control" id="input-cliente" aria-describedby="emailHelp" placeholder="Fulano de tal">
                                </div>
                                <div class="form-group">
                                    <label for="input-cartao">Número do cartão</label>
                                    <input name="input-cartao" type="text" class="form-control" id="input-cartao" placeholder="4242424242424242">
                                </div>
                                <div class="form-group">
                                    <label for="input-validade">Validade</label>
                                    <input name="input-validade" type="text" class="form-control" id="input-validade" placeholder="02/26">
                                </div>
                                <div class="form-group">
                                    <label for="input-cvv">CVV</label>
                                    <input name="input-cvv" type="text" class="form-control" id="input-cvv" placeholder="123">
                                </div>
                                <input type="hidden" name="input-total" value="<?php echo $carrinho->total(); ?>">
                                <input type="hidden" name="input-carrinho" value="<?php echo urlencode(serialize($carrinho)); ?>">
                                <button type="submit" class="btn btn-primary">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>