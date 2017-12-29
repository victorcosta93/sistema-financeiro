<?php
include_once ("../biblioteca/Conexao.php");

class ModelTransacao extends Conexao
{
    private $cd_transacao;
    private $ds_transacao;
    private $vl_transacao;
    private $dt_transacao;
    private $cd_acao_financeira;
    private $cd_tipo_transacao;
    private $cd_conta;
    private $cd_usuario;
    private $cadastrar;

    function __construct()
    {
        $this->conexao();
    }
    protected function pegarDadosModel($ds_transacao, $dt_transacao, $cd_tipo_transacao, $cd_conta, $cd_acao_financeira, $vl_transacao, $cd_usuario)
    {
        $this->ds_transacao = $ds_transacao;
        $this->dt_transacao = $dt_transacao;
        $this->cd_tipo_transacao = $cd_tipo_transacao;
        $this->cd_conta = $cd_conta;
        $this->cd_acao_financeira = $cd_acao_financeira;
        $this->vl_transacao = $vl_transacao;
        $this->cd_usuario = $cd_usuario;
        $this->cadastrarTransacao();
    }
    private function cadastrarTransacao()
    {
        $this->cadastrar = $this->pdo->prepare("INSERT INTO tb_transacao(ds_transacao, dt_transacao, vl_transacao, cd_usuario, cd_acao_financeira, cd_tipo_transacao, cd_conta) VALUES (:ds_transacao, :dt_transacao, :vl_transacao, :cd_usuario, :cd_acao_financeira, :cd_tipo_transacao, :cd_conta)");
        $this->cadastrar->bindValue(':ds_transacao', $this->ds_transacao);
        $this->cadastrar->bindValue(':dt_transacao', $this->dt_transacao);
        $this->cadastrar->bindValue(':vl_transacao', $this->vl_transacao);
        $this->cadastrar->bindValue(':cd_usuario', $this->cd_usuario);
        $this->cadastrar->bindValue(':cd_acao_financeira', $this->cd_acao_financeira);
        $this->cadastrar->bindValue(':cd_tipo_transacao', $this->cd_tipo_transacao);
        $this->cadastrar->bindValue(':cd_conta', $this->cd_conta);
        $this->cadastrar->execute();
    }


}