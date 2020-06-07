<?php
session_start();

if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado'] = 'SIM')
    header('Location:login.php?login=erro2');

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
    <link href="../css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>SUITUP</title>
</head>
<body>

<div class="container">
   <div class="row d-flex justify-content-center">
       <h2> Cadastrar Produto </h2>
   </div>

    <form class="form-signin" method="post" action="../Model/InserirProdutos.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="preco">Preço do produto</label>
            <input type="number" class="form-control" name="preco" id="preco" placeholder="90.00">
        </div>

        <div>
            <h6>Tipo do produto </h6>
            <input type="radio" name="tipo" id="camisa" value="camisa" checked>
            <label for="camisa">Camisa</label>
            <input type="radio" name="tipo" id="calcas" class="r" value="calça">
            <label for="calcas">Calça</label>
            <input type="radio" name="tipo" id="tenis" value="tenis">
            <label for="tenis">Tênis</label>
            </p>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição do Produto</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="custom-file ">
            <input type="file" name="arquivo" >

        </div>

            <div>
            <input type="submit" class="btn btn-outline-dark" name="cadastrar" value="Cadastrar Produto" >
            </div>

    </form>
</div>
</body>
</html>