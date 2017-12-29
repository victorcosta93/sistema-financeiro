<?php
include_once ("../biblioteca/Conexao.php");

class ModelTipoTransacao extends Conexao
{
    private $cd_tipo_transacao;
    private $nm_tipo_transacao;
    private $cd_usuario;
    private $consultar;
    public $resultado;

    public function __construct()
    {
        $this->conexao();
    }
    protected function cadastrar($nm_tipo_transacao, $cd_usuario ){
        $this->nm_tipo_transacao = $nm_tipo_transacao;
        $this->cd_usuario = $cd_usuario;
    }
    protected function editar($cd_tipo_transacao, $nm_tipo_transacao){
        $this->cd_tipo_transacao = $cd_tipo_transacao;
        $this->nm_tipo_transacao = $nm_tipo_transacao;
    }
    public function consultarTipoTransacao($cd_usuario){
        $this->cd_usuario = $cd_usuario;
        $this->exibir();
    }
    private function exibir(){
        $this->consultar = $this->pdo->prepare("SELECT * FROM tb_tipo_transacao  WHERE cd_usuario = :codigo ORDER BY nm_tipo_transacao");
        $this->consultar->bindValue(':codigo', $this->cd_usuario, PDO::PARAM_INT);
        $this->consultar->execute();
        $this->resultado = $this->consultar;
    }
}