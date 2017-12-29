<?php
include_once ("../model/ModelTransacao.php");
include_once ("../model/ModelAcaoFinanceira.php");
include_once ("../model/ModelTipoTransacao.php");
include_once ("../model/ModelConta.php");

class ControllerTransacao extends ModelTransacao
{
    private $cd_transacao;
    private $ds_transacao;
    private $vl_transacao;
    private $dt_transacao;
    private $cd_acao_financeira;
    private $cd_tipo_transacao;
    private $cd_conta;
    private $cd_usuario;
    private $modelAcaoFinanceira;
    private $modelTipoTransacao;
    private $modelConta;
    public $resultadoTipoTransacao;
    public $resultadoConta;
    public $resultadoAcaoFinanceira;
    public $resultado;

    public function __construct()
    {
        $this->modelAcaoFinanceira = new ModelAcaoFinanceira();
        $this->modelTipoTransacao = new ModelTipoTransacao();
        $this->modelConta = new ModelConta();
    }
    public function consultarTipoTransacao($cd_usuario){
        $this->cd_usuario = $cd_usuario;
        $this->modelTipoTransacao->consultarTipoTransacao($this->cd_usuario);
        $this->resultadoTipoTransacao = $this->modelTipoTransacao->resultado->fetchALL(PDO::FETCH_ASSOC);
    }
    public function consultarTipoConta($cd_usuario){
        $this->cd_usuario = $cd_usuario;
        $this->modelConta->consultarConta($this->cd_usuario);
        $this->resultadoConta = $this->modelConta->resultado->fetchALL(PDO::FETCH_ASSOC);
    }
    public function consultarAcaoFinanceira(){
        $this->modelAcaoFinanceira->consultarAcaoFinanceira();
        $this->resultadoAcaoFinanceira = $this->modelAcaoFinanceira->resultado->fetchALL(PDO::FETCH_ASSOC);
    }


    public function pegarDados($ds_transacao, $dt_transacao,$cd_tipo_transacao, $cd_conta, $cd_acao_financeira,$vl_transacao, $cd_usuario){
        $this->ds_transacao = $ds_transacao;
        $this->dt_transacao = $dt_transacao;
        $this->cd_tipo_transacao = $cd_tipo_transacao;
        $this->cd_conta = $cd_conta;
        $this->cd_acao_financeira = $cd_acao_financeira;
        $this->vl_transacao = $vl_transacao;
        $this->cd_usuario = $cd_usuario;
        $this->pegarDadosModel($this->ds_transacao, $this->dt_transacao, $this->cd_tipo_transacao, $this->cd_conta,
                            $this->cd_acao_financeira, $this->vl_transacao, $this->cd_usuario);
    }


}