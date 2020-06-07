<?php

namespace App\Model;

require_once 'Conexao.php';

class Usuario{


    private $codigo,$nome,$telefone,$email,$endereco,$senha,$sexo;


    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }


    public function Validalogin($email,$senha){
        $query = "SELECT * FROM tb_usuario where email = :email AND senha = :senha";
        $stmt = Conexao::getConexao()->prepare($query);
        $stmt->bindValue("email",$email);
        $stmt->bindValue("senha",md5($senha));
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

}