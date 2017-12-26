<?php session_start();

class Verifica
{
    public function validarAcesso(){
        $this->verificarAcesso();
    }
    private function verificarAcesso(){
        if (isset($_SESSION['logado']) != true){
            echo "<script>
                alert('Você não tem permissão para acessar esse arquivo.');
                document.location.href = '../index.php';
            </script>";

        }
    }

}