<?php


namespace App\Model;


class UsuarioDao{

    public function create(Usuario $u){

        $query = "insert into tb_usuario values(?,?,?,?,?,?,?)";
        $stmt = Conexao::getConexao()->prepare($query);
        $stmt->bindValue(1,null);
        $stmt->bindValue(2,$u->getNome());
        $stmt->bindValue(3,$u->getTelefone());
        $stmt->bindValue(4,$u->getEmail());
        $stmt->bindValue(5,$u->getEndereco());
        $stmt->bindValue(6,md5($u->getSenha()));
        $stmt->bindValue(7,$u->getSexo());
        $stmt->execute();

    }

    public function read(){
        $query = "select * from tb_usuario";

        $stmt = Conexao::getConexao()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(\Usuario $u){

    }

    public function delete(){

    }

}