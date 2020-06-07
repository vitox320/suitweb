<?php


namespace App\Model;


class Conexao{

    private static $instance;
    public static function getConexao(){
        if(!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=suitup', 'root', '');
        }
        return self::$instance;
    }

}