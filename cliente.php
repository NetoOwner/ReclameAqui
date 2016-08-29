<div align="center"><a  class="btn btn-danger" role="button">Bem Vindo</a> <br>
<?php
	session_start();
	echo $_SESSION['usuarioNome'];	
?>
</div>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Reclame aqui">
    <meta name="author" content="Neto">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Reclame Aqui - Formulário</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
	

      <form class="form-signin" method="POST" action="processa_cad_usuario.php">
        <h2 class="form-signin-heading">Formulário</h2>
		<label for="inputPassword" class="sr-only">Telefone</label>
        <input type="text" name="txt_nome_usuario" id="inputNome" class="form-control" placeholder="Digite o seu Telefone" required>
        <label for="inputPassword" class="sr-only">Empresa</label>
        <input type="text" name="txt_senha_usuario" id="inputPassword" class="form-control" placeholder="Empresa que está fazendo a cobrança" required>
		
		<div class="form-group">
    <label for="exampleTextarea" class="sr-only">Descreva o Problema</label>
    <textarea class="form-control" placeholder="Descreva o Problema" name="txt_descreva_problema" rows="7" required autofocus></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Anexar Arquivo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Escolher arquivo a ser anexado.</small>
  </div>
  
		<button class="btn btn-lg btn-danger btn-block" type="submit">Enviar</button>
        
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<br>




<a href="sair.php"  class="btn btn-danger" role="button">Sair</a> 

