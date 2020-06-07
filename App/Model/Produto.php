<?php

namespace App\Model;
class Produto{

    private $preco,$descricao,$arquivo,$tipo;


    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco) {
       $this->preco = $preco;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getArquivo(){
        return $this->arquivo;
    }

    public function setArquivo($arquivo){
        $this->arquivo = $arquivo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
}