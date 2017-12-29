<?php
include_once("../biblioteca/Conexao.php");

class ModelAcaoFinanceira extends Conexao
{
    private $cd_acao_financeira;
    private $nm_acao_financeira;
    private $consultar;
    public $resultado;

    public function __construct()
    {
        $this->conexao();
    }

    public function consultarAcaoFinanceira(){
        $this->consultar = $this->pdo->prepare("SELECT * FROM tb_acao_financeira ORDER BY nm_acao_financeira");
        $this->consultar->execute();
        $this->resultado = $this->consultar;
    }
}