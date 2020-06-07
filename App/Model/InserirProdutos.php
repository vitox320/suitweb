<?php

require_once "Produto.php";
require_once 'Conexao.php';
require_once "ProdutoDao.php";


$p = new \App\Model\Produto();
$preco = filter_input(INPUT_POST,'preco',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (is_numeric($preco)) {
    $p->setPreco(number_format($preco));
}

$p->setTipo($_POST['tipo']);
$pDao = new \App\Model\ProdutoDao();
if(isset($_POST['cadastrar'])){

    $formatosPermitidos = ["png","jpeg","jpg","gif","PNG","JPG","GIF","JPEG"];
    $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
    if(in_array($extensao,$formatosPermitidos)){
        if($_POST['tipo'] == "calça"){
            $pasta = "../img/calcas/";
        }elseif ($_POST['tipo'] == "camisa"){
            $pasta = "../img/camisetas/";
        }else{
            $pasta = "../img/tenis/";
        }
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";
        if(move_uploaded_file($temporario,$pasta.$novoNome)){
            $mensagem = "Upload feito com sucesso";
             $p->setArquivo($pasta.$novoNome);

        }else{
            $mensagem = "Não foi possivel fazer o upload ";
        }
    }else{
        $mensagem = "formato inválido";
    }

}
$descricao = filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_SPECIAL_CHARS);
$p->setDescricao($descricao);


if(empty($p->getPreco())||empty($p->getDescricao())||empty($p->getArquivo())){
    header("Location:../View/InserirProduto.php?inserir=0");
}else{
    $pDao->create($p);
    header("Location:../View/InserirProduto.php?inserir=1");
}

?>
