<?php
session_start();


require_once'Conexao.php';
require_once 'Usuario.php';
require_once 'UsuarioDao.php';


$u = new \App\Model\Usuario();
$uDao = new \App\Model\UsuarioDao();

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);

        if ($u->Validalogin($email, $senha)) {
            $_SESSION['autenticado'] = "SIM";
            header('location:../../index.php?login=valido');

        } else {
            $_SESSION['autenticado'] = "NAO";
            header('location:../View/index.php?login=invalido');
        }

}






