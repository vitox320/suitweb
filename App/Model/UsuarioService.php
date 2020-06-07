<?php


namespace App\Model;

require_once "Conexao.php";
require_once "UsuarioDao.php";
require_once "Usuario.php";



    $u = new Usuario();

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

    $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

    $endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_SPECIAL_CHARS);

    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);



    $u->setSexo($_POST['sexo']);
    $u->setNome($nome);
    $u->setTelefone($telefone);
    $u->setEmail($email);
    $u->setEndereco($endereco);
    $u->setSenha($senha);

    $pDao = new UsuarioDao();
    if(empty($u->getNome())||empty($u->getTelefone())||empty($u->getEmail())||empty($u->getEndereco())||empty($u->getSenha())){
        header('Location:../View/cadastro.php?cadastro=0');
    }
    else {
        $pDao->create($u);
        header('Location:../View/cadastro.php?cadastro=1');
    }





