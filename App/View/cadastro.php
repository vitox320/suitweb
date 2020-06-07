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
            <a class="navbar-brand text-uppercase" href="..\..\index.php">SuitUp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="produtos.php">Produtos <span class="sr-only">(current)</span></a>
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
                        <a class="nav-link" href="login.php">Conta <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="sacola.php">Sacola <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Jumbotron -->
    <div class=" container cadastro w-100 pt-3">
        <div class="row">
            <div class="col-12 d-block mb-5">
                <h2 class="text-secondary d-flex justify-content-center">REGISTRE-SE</h2>
                <p class="text-justify text-center text-secondary"><small>
                        Inscreva-se para ver no que estamos trabalhando e reivindique as primeiras impressões sobre
                        todos os lançamentos de novos produtos.Mantenha-se sempre informado e a frente</small></p>
            </div>
        </div>
    </div>


    <!-- Form -->
    <div class="container">
        <form class="cadastro" method="post" action="../Model/UsuarioService.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome1" name="nome">
            </div>

            <div class="form-group ">
                <label for="email1">Email:<br></label>
                <input class="form-control" type="email" id="email1" name="email">
            </div>

            <div class="form-group ">
                <label for="endereco">Endereco:</label>
                <input class="form-control" type="text" id="endereco" name="endereco">
            </div>

            <div class="form-group ">
                <label for="tel1">Telefone:</label>
                <input class="form-control" type="tel" id="tel1" name="telefone">
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha">
            </div>

            <p>Qual o estilo que mais te interessa? <br>
                <input type="radio" name="sexo" id="masc" value="Masculino" checked>
                <label for="masc">Masculino</label>
                <input type="radio" name="sexo" id="fem" class="r" value="Feminino">
                <label for="fem">Feminino</label>
            </p>
            <div class="container">
                <p class="row d-flex justify-content-center"> <input type="submit" value="CRIE UMA CONTA" class="btn btn-outline-dark w-50 p-3 " onclick="cadastro()">
                <?php if(isset($_GET['cadastro']) && $_GET['cadastro']== 1){ ?>
                <div id="res" class="text-success row d-flex justify-content-center">
                    Usuário cadastrado com sucesso!

                </div>
                <?php } ?>

                <?php if(isset($_GET['cadastro'])&& $_GET['cadastro'] == 0) {?>
                <div id="res" class="text-danger row d-flex justify-content-center">
                    Preencha todos os campos!

                </div>
                <?php } ?>
                </p>
            </div>
        </form>
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
    <script src="../js/validaCadastro.js" ></script>
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