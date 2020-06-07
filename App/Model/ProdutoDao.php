<?php
namespace App\Model;


require_once "Conexao.php";
require_once "Produto.php";

class ProdutoDao{


    public function create( \App\Model\Produto $p){
        $query = "insert into tb_produto VALUES (?,?,?,?,?)";
        $stmt =\App\Model\Conexao::getConexao()->prepare($query);
        $stmt ->bindValue(1,null);
        $stmt ->bindValue(2,$p->getPreco());
        $stmt ->bindValue(3,$p->getDescricao());
        $stmt ->bindValue(4,$p->getArquivo());
        $stmt ->bindValue(5,$p->getTipo());
        $stmt->execute();
    }

    public function read(){
        $query = "SELECT * FROM tb_produto";
        $stmt = \App\Model\Conexao::getConexao()->prepare($query);
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(\App\Model\Produto $p){

    }

    public function delete(){

    }


}
