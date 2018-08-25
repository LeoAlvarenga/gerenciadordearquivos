<?php
	
	session_start();
	include_once("conexao.php");
	include('verificarlogin.php');
	

?>
<!DOCTYPE html>

<html>
	<head>
	<title>Gestão de Arquivos NDI.</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo.css"> 
	
	</head>
	</body>
	    <header>
		<p><h1><center>Bem vindo, <?php echo $_SESSION['usuario'];?><br>
		</br><a href="logout.php">SAIR</a></center></h1></p>
		</header>
		
		
		<div class="navbar">
			<ul>
				<li><a href="#">Pesquisar</a>
					<ul>
						<li><a>Tipo de Arquivo: </a></li>
						<li><a href='tipo.php?tp=certificados' >Certificado</a></li>
						<li><a href='tipo.php?tp=dossie' >Dossiê</a></li>						
						<li><a href='tipo.php?tp=registros' >Registro</a></li>
					</ul>
				</li>
				<li><a href="#">Gerenciar</a>

				</li>
				<li><a href="teste1.html">Configuração</a></li>
				<li><a href="#">Suporte</a></li>
				
			</ul>
		</div>
		 <footer>
			<img src="senai.png" >
		</footer>
	</body>

</html>
