<?php session_start();

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Painel - Módulo Financeiro</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <link rel="icon" href="../biblioteca/icon.png" type="image/x-icon" />
        <link rel="shortcut icon" href="../biblioteca/icon.png" type="image/x-icon" />
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="painel.php">Módulo Financeiro</a>
                </div>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></i> Olá <?php echo $_SESSION['nm_usuario']?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Meus dados</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
               <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="painel.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Grafícos</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Transações Financeiras</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-plus"></i> Ferramentas <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="nova_transacao.php">Nova transação</a>
                                </li>
                                <li>
                                    <a href="tipo_transacao.php">Tipos de transações</a>
                                </li>
                                <li>
                                    <a href="tipo_conta.php">Tipos de contas</a>
                                </li>
                                <li>
                                    <a href="conta.php">Contas</a>
                                </li>
                                <li>
                                    <a href="emprestimo.php">Empréstimos</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <small>Transações</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Ambiente de gestão das ultimas transações do mês. </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Nova transação:</h2>
                                    <form name= "frmemprestimo" action="../controller/ControllerNovaTransacao.php" method="post" accept-charset="utf-8">
                                        <label for="text">Descrição *:</label>
                                        <input type="text" size="20" name="ds_transacao" class="form-control" >
                                        <br>
                                        <label for="text">Data *:</label>
                                        <input type="Date"  name="data_transacao" class="form-control">
                                        <br>
                                        <label for="text">Tipo *:</label>
                                        <input type="text"  name="tipo_transacao" class="form-control">
                                        <br>
                                        <label for="text">Conta *:</label>
                                        <input type="text" size="20" name="conta" class="form-control" >
                                        <br>
                                        <label for="text">Ação *:</label>
                                        <input type="text" size="20" name="tipo_acao" class="form-control" >
                                        <br>
                                        <label for="text">Valor (R$) *:</label>
                                        <input type="number" size="5" name="valor_transacao" class="form-control">
                                        <br>
                                        <div>
                                            <button style="background-color: black; border-color: #adadad; color: #e3e3e3;" type="submit" class="btn btn-defaul" name="acao" value="cadastrar" >Cadastrar</button>
                                        </div>
                                    </form>
                        </div>

                        <div class="col-lg-6">
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Transação</th>
                                            <th>Valor R$</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Data</td>
                                            <td>Transação</td>
                                            <td>Valor R$</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
    </body>
</html>
