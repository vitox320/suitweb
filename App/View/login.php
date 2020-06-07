<?php

session_start();

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">

  <title>SUITUP</title>
</head>

<body class="text-center">

  <div class="container">
    <form class="form-signin" method="post" action="../Model/ValidaLogin.php">
      <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1> -->
      <h1 class="h3 mb-3 font-weight-normal">Fazer login</h1>
      <p>Ou registre-se aqui</p>
      <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <div class="row">
        <div class="col-6">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>
        <div class="col-6">
          <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button> -->
          <a class="btn btn-lg btn-primary btn-block" href="cadastro.php" role="button">Registrar</a>
        </div>
      </div>
      <p class="mt-5 mb-3 text-muted "><a id="nav-retornar" class="nav-link" href="../../index.php">
          Cancelar</a></p>
    </form>
  </div>

</body>

</html>