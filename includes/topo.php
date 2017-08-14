<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K&F Design</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
  </head>
  <body>

  <?php include("../includes/conexao/conexao.php"); ?>

<?php
  $sel_cat = $_SERVER['REQUEST_URI'];
  $procurar = 'Home';

  if (strpos("[" . $sel_cat . "]", "$procurar")) {
  	//var_dump("tem");
  } else {
?>
  <style>
    header {
      background-image: url(../imagem/fundo-header.png);
      background-size: cover;
      margin-top: 0px;
      height: 120px;
      padding-top: 19px;
    }
  </style>
<?php
  }
?>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img src="../imagem/kefdesign.png" class="pull-right">
        </div>
        <div class="col-lg-6">
          <nav class="navbar navbar-default corMenu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="../Home">Home</a></li>
                <li><a href="../Quem-somos">Quem Somos</a></li>
                <li><a href="../Servicos">Serviços</a></li>
                <li><a href="../Parceiros">Parceiros</a></li>
                <li><a href="../Contato">Contato</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>-->
              </ul>
              <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>-->
            </div><!-- /.navbar-collapse -->
          </div>
          <div class="col-lg-3 telefoneTopo">
            <img src="../imagem/telefone.png">
            <label>(51) 9516 9996</label>
          </div>
        </div>
      </div>
    </div>
  </header>