<?php

class Conexao
{
    public $pdo;

    function conexao(){
        try {
            $this->pdo = new  PDO ("mysql:host=localhost; dbname=db_sistema_financeiro", "root", "");

        } catch (PDOException $e) {
            echo "Mensagem de erro: " . $e->getMessage() . "</br></br>";
            echo "Código do erro: " . $e->getCode() . "<br><br>";
            echo "<strong>Entre em contato com o administrador do sistema.</strong>";
        }
        return $this->pdo;
    }
}