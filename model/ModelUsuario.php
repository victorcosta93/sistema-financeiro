<?php
include_once("./biblioteca/Conexao.php");

class ModelUsuario extends Conexao
{
    private $codigo;
    private $nome;
    private $email;
    private $cpf;
    private $dt_nascimento;
    private $senha;
    private $dt_cadastro;
    private $consultar;
    public $resultado;

    public function __construct()
    {
        $this->conexao();
    }
    public function pegarDadosLogon($email, $senha){
       $this->email = $email;
       $this->senha = $senha;
       $this->consultarDadosLogon();
    }
    private function consultarDadosLogon(){
       $this->consultar = $this->pdo->prepare("SELECT * FROM tb_usuario WHERE nm_email_usuario = :email AND nm_senha_usuario = :senha");
       $this->consultar->bindValue(":email", $this->email, PDO::PARAM_STR);
       $this->consultar->bindValue(":senha", $this->senha, PDO::PARAM_STR);
       $this->consultar->execute();
       $this->resultado = $this->consultar;
    }

}