<?php
include_once ("controller/ControllerLogon.php");
$obj = new ControllerLogon();

if(isset($_POST['email']) && isset($_POST['senha'])){
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['senha']))){

        $obj->logar($_POST['email'], $_POST['senha']);

    }
    else{
        echo "Não logou.";
    }
}

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="biblioteca/icon.png" type="image/x-icon" />
        <link href="view/css/bootstrap.min.css" rel="stylesheet">
        <link href="view/css/sb-admin.css" rel="stylesheet">
        <link href="view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script	type="text/javascript">
                function validar(frmlogin){
                    var email_acesso = frmlogin.email.value;
                    var senha_acesso = frmlogin.senha.value;
                    if(email_acesso.trim() == "" || senha_acesso.trim() == "")
                        {
                            alert("Preencha os campos corretamente.");
                            frmlogin.email_acesso.focus();
                            return false;
                        }
                }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-0 col-md-4"> <!-- Espaço entre as colunas, só para computador. --> </div>
                <div class="col-xs-12 col-md-4 well" style="letras_pretas">
                    <h3 style="text-align: center">Painel de Controle</h3>
                    <br>
                    <form name="frmlogin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validar (this)">
                        <div class="login-fields">
                            <div class="field">
                                <label for="username">Username:</label>
                                <input type="email" id="username" name="email" maxlength=30 size=30 placeholder="email@email.com" class="form-control input-lg username-field" />
                            </div>
                            <br>
                            <div class="field">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="senha" size=30 placeholder="senha" class="form-control input-lg password-field"/>
                            </div>
                        </div>
                            <br>
                            <div class="login-actions">
                                <input type="submit" value="Acessar" class="login-action btn btn-primary" style="float: right">
                            </div>
                    </form>
                </div>
            <div class="col-xs-0 col-md-4"> <!-- Espaço entre as colunas, só para computador. --> </div>
        </div>
            <p class="link_desenvolvido_por">Desenvolvido por <a href="mailto:victor.hlscosta@gmail.com?Subject=Contato Sistema Financeiro" target="_top"> Victor Hugo Costa <a/>.</p>
        </div>
        <script src="view/js/jquery.js"></script>
        <script src="view/js/bootstrap.min.js"></script>
    </body>
</html>

