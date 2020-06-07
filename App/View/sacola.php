<?php

require_once "../Model/Produto.php";
require_once "../Model/ProdutoDao.php";

session_start();
if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado'] = 'SIM') {
    header('Location:login.php?login=erro2');
}


?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SUITUP</title>
    <script>


    </script>

</head>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="color: #808284; background-color: #FFFF;">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="../../index.php">SuitUp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="nav-link-camiseta" class="nav-link" href="produtos.php">Produtos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="camisas.php">Camisas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="calcas.php">Calças <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sapatos.php">Sapatos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a id="nav-link-conta" class="nav-link" href="login.php">Conta <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a id="nav-link-conta" class="nav-link" href="../View/contato.php">Contato <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sacola.php">Sacola <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="display-1 d-flex justify-content-center"><span class="bg-dark text-white">SUIT</span>UP</div>
</div>

<br>
<br>

<div class="container">
    <div class="display-4 d-flex justify-content-center">Todos os Pedidos </div>
</div>
<br>
<form action="../Model/SacolaProduto.php" method="post">
    <table class="table">
        <thead>
            <tr >
                <th scope="col">Codigo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>

                <td>desc</td>

                <td><input type="number" name="quantidade" id="quantidade"></td>

                <td>valor</td>

                <td>Total</td>

            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><input class="btn btn-outline-dark" type="submit" value="Calcular Pedidos"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td ><input class="btn btn-outline-dark" type="submit" value="Finalizar Pedido"></td>

                </tr>
            </tfoot>
      </table>

</form>
</body>
</html>
