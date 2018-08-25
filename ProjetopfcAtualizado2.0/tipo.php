<?php
	
	session_start();
	include_once("conexao.php");
	$tp = $_GET['tp'];


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
		<p><h1><center><br>
		</br><a href="logout.php">SAIR</a></center></h1></p>
		</header>
		
	
			<form class="form" method="POST" action="pesquisar.php?tipo=<?php echo $tp?>">

				<div class="section">
	
							<div class="control-group">
								<label class="control-label">Nome</label>
								<input type="text" class="control" id="nome" name="nome" autofocus "required">
							</div>
							
							<div class="control-group">
								<label class="control-label">CPF</label>	
								<input type="text" class="form-control" id="cpf" name="cpf">
							</div>
							
							<div class="control-group">
								<label class="control-label">Ano</label>
								<input type="text" class="form-control" id="ano" name="ano" >
							</div>
							
							<div class="control-group">
								<label class="control-label">Curso</label>
								<input type="text" class="form-control" id="curso" name="curso">
							</div>	
							
							<div class="control-group">
								<label class="control-label">Turma</label>
								<input type="text" class="form-control" id="turma" name="turma">
							</div>
							
							<div class="control-group">
								<label class="control-label">Duração</label>
								<input type="text" class="form-control" id="duracao" name="duracao">
							</div>
						
							<div class="control-group">
								<label class="control-label">Área</label>
								<input type="text" class="form-control" id="area" name="area">
							</div>
							
							<div class="control-group">
								<label class="control-label">Cidade</label>
								<input type="text" class="form-control" id="cidade" name="cidade">
							</div>
							
							<div class="control-group">
								<label class="control-label">Unidade</label>
								<input type="text" class="form-control" id="unidade" name="unidade">
							</div>
							
							<div id="button">
								
								<center><input type="submit" name="senha" value="Pesquisar <?php echo $tp?>"></center><br></br>
								
								
							</div> 			

							
				</div>
			</form>	
							
			
			
		 <footer>
			<img src="senai.png" >
		</footer>
	</body>

</html>