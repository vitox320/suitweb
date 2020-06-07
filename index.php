
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
    <link href="App\css\style.css" rel="stylesheet" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">

    <title>SUITUP</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="color: #808284; background-color: #FFFF;">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.php">SuitUp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a id="nav-link-camiseta" class="nav-link" href="App/View/produtos.php">Produtos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="App/View/camisas.php">Camisas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="App/View/calcas.php">Calças <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="App/View/sapatos.php">Sapatos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a id="nav-link-conta" class="nav-link" href="App/View/login.php">Conta <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="App/View/sacola.php">Sacola <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="App/img/banners/banner1.png" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="App/img/banners/banner2.png" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="App/img/banners/banner3.png" alt="Terceiro slide">
            </div>
        </div>
    </div>


    <!-- Mais Vendidos -->
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center">
                <h2>Mais Vendidos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/camisetas/5edc3b085c30a.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">R$ 95</h5>
                        <p class="card-text">Decote em V sob medida</p>
                        <a href="App\View\produto.php" class="btn btn-primary text-uppercase">Ver Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/camisetas/5edc3a9b32c44.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">R$ 89,99</h5>
                        <p class="card-text">Manga Longa com bolso</p>
                        <a href="App\View\produto.php" class="btn btn-primary text-uppercase">Ver Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/tenis/5edc40de9129b.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">R$ 95</h5>
                        <p class="card-text">Sapato de couro cinza</p>
                        <a href="App\View\produto.php" class="btn btn-primary text-uppercase">Ver Mais</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid my-5">
        <div class="container">
            <h2 class="display-4 d-flex justify-content-center">Materiais Recicláveis</h2>
            <p class="lead d-flex justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                in leo non dui mollis.</p>
        </div>
    </div>


    <!-- Nossos Produtos -->
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center">
                <h2>Nossos Produtos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/camisetas/5edc3d18623e8.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        <a href="App\View\produtos.php" class="btn btn-primary text-uppercase">Ver Categoria</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/calcas/5edc632d936ff.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calça</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        <a href="App\View\produtos.php" class="btn btn-primary text-uppercase">Ver Categoria</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="App/img/tenis/5edc3f188a0e2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tênis</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        <a href="App\View\produtos.php" class="btn btn-primary text-uppercase">Ver Categoria</a>
                    </div>
                </div>
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
                    <img src="App/img/icons/icon_facebook.png" alt="Ícone do Facebook" style="width: 15px;">
                    <p class="text-right d-inline-block">suitup_store</p>
                </div>
                <div class="col-6">
                    <img src="App/img/icons/icon_instagram.png" alt="Ícone do Instagram" style="width: 22px;">
                    <p class="text-left d-inline-block">@suitup_store</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <script src="../js/carrega-produto.js"></script>
    <script src="../js/navbar.js"></script>


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