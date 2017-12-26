<?php session_start();
include_once("./model/ModelUsuario.php");

class ControllerLogon extends ModelUsuario
{
    public $codigo;
    public $nome;
    public $email;
    public $senha;
    public $prepararResultado;
    public $listar;

   public function logar($email, $senha){
        $this->email = $email;
        $this->senha = md5($senha);
        $this->pegarDadosLogon($this->email, $this->senha);
        $this->validarLogon();
   }
   public function validarLogon(){
        if($this->resultado->rowCount() == 1){
            $_SESSION['logado'] = true;
            $this->prepararResultado = $this->resultado->fetchALL(PDO::FETCH_OBJ);
            foreach ($this->prepararResultado as $this->listar){
                $_SESSION['cd_usuario'] = $this->listar->cd_usuario;
                $_SESSION['nm_usuario'] = $this->listar->nm_usuario;
            }
            echo "<script>
                   alert('Usuário logado com sucesso.');
                   document.location.href = 'view/painel.php';
              </script>";
        }else{
            echo "<script>
                    alert('Usuário e senha errados.');                    
                 </script>";
        }
    }
}