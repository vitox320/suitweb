<?php
require_once "../Model/Conexao.php";
require_once "../Model/ProdutoDao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link href="../css/style.css" rel="stylesheet" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">

    <title>SUITUP</title>
</head>

<body>

<!-- Navbar -->
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
                    <a class="nav-link" href="produtos.php">Produtos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="produtos.php">Camisas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="produtos.php">Calças <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="produtos.php">Sapatos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Conta <span class="sr-only">(current)</span></a>
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


<!-- Produtos -->
<div class="container">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-center">
            <h2>Produtos</h2>
        </div>
    </div>

    <div class="row">

        <?php
        $listagem = \App\Model\Conexao::getConexao()->prepare("SELECT * FROM tb_produto where tipo = 'tenis'");
        $listagem->execute();
        while($lista = $listagem->fetch(PDO::FETCH_ASSOC)):
            ?>
            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $lista["arquivo"]?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "R$ ".$lista["preco"]?></h5>
                        <p class="card-text"><?php echo $lista["descricao"] ?></p>
                        <input class="btn btn-outline-dark" type="button" value="Adicionar ao carrinho" onclick="">
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class="container mt-5 py-5">
        <div class="row d-flex justify-content-center">
            <h5>SUITUP</h5>
        </div>
        <div class="row d-flex justify-content-center">
            <address>
                Rua Lorem Ipsum, número 000<br>
                CEP 00000-00, São Paulo - SP<br><br>
                +55 11 0000-0000 / +55 11 9999-9999
            </address>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-6 text-right">
                <img src="../img/icons/icon_facebook.png" alt="Ícone do Facebook" style="width: 15px;">
                <p class="text-right d-inline-block">suitup_store</p>
            </div>
            <div class="col-6">
                <img src="../img/icons/icon_instagram.png" alt="Ícone do Instagram" style="width: 22px;">
                <p class="text-left d-inline-block">@suitup_store</p>
            </div>
        </div>

    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
