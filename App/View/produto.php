

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
                        <a id="nav-link-conta" class="nav-link" href="../View/contato.php">Contato <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="sacola.php">Sacola <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Retornar -->
    <div class="container mb-4">
        <nav class="nav">
            <a id="nav-retornar" class="nav-link" href=".\produtos.php">
                < Camisetas</a>
        </nav>
    </div>

    <!-- Produto Detalhe -->
    <div class="container">
        <div class="card border-light">
            <!-- Carousel -->
            <div class="col-12 d-flex justify-content-center">
                <div id="carouselProductImage" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProductImage" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProductImage" data-slide-to="1"></li>
                        <li data-target="#carouselProductImage" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="../img/camisetas/5edc3b085c30a.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="../img/camisetas/5edc3b085c30a.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="../img/camisetas/5edc3b085c30a.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselProductImage" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProductImage" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-title">Decote em V sob medida</h5>
                <h6 class="card-subtitle mb-2 text-muted">(Cód. 1616931348)</h6>
                <p class="card-text">R$ 69,99</p>
                <!-- <a href="produto.html" class="btn btn-primary text-uppercase">Adicionar <img
                        src="../img/icons/icon_cart.png" alt="Ícone de um carrinho de compras" style="width: 20px;"></a> -->

                <a href="produtos.php" class="btn btn-primary text-uppercase">Adicionar <svg class="bi bi-bag"
                        width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z"
                            clip-rule="evenodd" />
                        <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z" />
                    </svg></a>
            </div>
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