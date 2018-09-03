<?php
	
	session_start();
	include_once("conexao.php");
	include('verificarlogin.php');
	include('verificaradm.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gestão de Arquivos NDI.</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="rodape.css"> 	

</head>
  <body>
		
		<!--Cabeçalho do sistema onde contém os botões de acesso.-->
		<nav class="navbar navbar-expand-lg navbar-dark" style= "background-color: #2a7a9f;">
				<a class="navbar-brand" href="#">NDI</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="bemvindo.php">Pesquisar</a>
							</li>
							
							 <li class="nav-item">
								<a class="nav-link" href="gerenciar.php">Gerenciar</a>
							 </li>
							 
							<li class="nav-item">
								<a class="nav-link" href="#">Configuração</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#">Suporte</a>
							 </li>
							 
						</ul>
							<form class="form-inline my-2 my-lg-0">
								<label><?php echo $_SESSION['usuario']?></label>
							   <a class="btn btn-outline-light" href="logout.php">Sair</a>
							</form>
				</div>
		</nav>

	

			<div id="editar form-col pl-4" style="width:80%; margin: 250px;">
				<div class="container"  style="margin:200px;">
				
					<a class="btn btn-outline-success btn-lg" value="Adicionar" href="adicionar.php" style="margin:10px;">Adicionar</a>
				
					<a class="btn btn-outline-success btn-lg" value="Editar" href="editar.php" style="margin:10px;">Editar</a>
				
					<a class="btn btn-outline-danger btn-lg" value="Excluir" href="excluir.php" style="margin: 10px;">Excluir</a>
				</div>	
			</div>		
		
	
		<footer>
			<img src="senai.png" >
		</footer>	
 </body>
</html>	