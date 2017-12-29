<?php
include_once ("../biblioteca/Conexao.php");


class ModelConta extends Conexao
{
    private $cd_conta;
    private $nm_conta;
    private $nm_banco;
    private $cd_agencia_banco;
    private $cd_conta_banco;
    private $cd_tipo_conta;
    private $cd_usuario;
    private $consultar;
    public $resultado;

    function __construct()
    {
        $this->conexao();
    }
    protected function cadastrar($nm_conta, $nm_banco, $cd_agencia_banco, $cd_conta_banco, $cd_tipo_conta, $cd_usuario ){
        $this->nm_conta = $nm_conta;
        $this->nm_banco = $nm_banco;
        $this->cd_agencia_banco = $cd_agencia_banco;
        $this->cd_conta_banco = $cd_conta_banco;
        $this->cd_tipo_conta = $cd_tipo_conta;
        $this->cd_usuario = $cd_usuario;
    }
    protected function editar($cd_conta, $nm_conta, $nm_banco, $cd_agencia_banco, $cd_conta_banco, $cd_tipo_conta, $cd_usuario){
        $this->cd_conta = $cd_conta;
        $this->nm_conta = $nm_conta;
        $this->nm_banco = $nm_banco;
        $this->cd_agencia_banco = $cd_agencia_banco;
        $this->cd_conta_banco = $cd_conta_banco;
        $this->cd_tipo_conta = $cd_tipo_conta;
        $this->cd_usuario = $cd_usuario;
    }
    public function consultarConta($cd_usuario){
        $this->cd_usuario = $cd_usuario;
        $this->exibir();

    }
    private function exibir(){
        $this->consultar = $this->pdo->prepare("SELECT * FROM tb_conta WHERE cd_usuario = :codigo ORDER BY nm_conta");
        $this->consultar->bindValue(":codigo", $this->cd_usuario);
        $this->consultar->execute();
        $this->resultado = $this->consultar;
    }


}