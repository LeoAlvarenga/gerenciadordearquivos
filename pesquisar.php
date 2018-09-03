<?php
	
	session_start();
	include_once("conexao.php");
	include('verificarlogin.php');
	
	$nomet = $_POST['nome'];
	$cpft = $_POST['cpf'];
	$anot = $_POST['ano'];
	$cursot = $_POST['curso'];
	$turmat = $_POST['turma'];
	$duracaot = $_POST['duracao'];
	$areat = $_POST['area'];
	$cidadet = $_POST['cidade'];
	$unidadet = $_POST['unidade'];
	$tipo = $_POST['tipo'];
	
	if(empty($nomet)){
		$nomep = "";
	}else{
		$nomep = " AND nome='$nomet'";
	}
	
	if(empty($anot)){
		$anop = "";
	}else{
		$anop = " AND ano='$anot'";
	}
	
	if(empty($cursot)){
		$cursop = "";
	}else{
		$cursop = " AND curso='$cursot'";
	}
	
	if(empty($turmat)){
		$turmap = "";
	}else{
		$turmap = " AND turma='$turmat'";
	}
	
	if(empty($duracaot)){
		$duracaop = "";
	}else{
		$duracaop = " AND duracao='$duracaot'";
	}
	
	if(empty($areat)){
		$areap = "";
	}else{
		$areap = " AND area='$areat'";
	}
	
	if(empty($cidadet)){
		$cidadep = "";
	}else{
		$cidadep = " AND cidade='$cidadet'";
	}
	
	if(empty($unidadet)){
		$unidadep = "";
	}else{
		$unidadep = " AND unidade='$unidadet'";
	}
	
	echo $tipo.$cpft.$nomep.$cursop.$anop.$turmap.$duracaop.$areap.$cidadep.$unidadep;
	
	$result = mysqli_query($conn, "SELECT * FROM $tipo WHERE cpf='$cpft'".$nomep.$cursop.$anop.$turmap.$duracaop.$areap.$cidadep.$unidadep);
	
$array = array($result);
print_r($array);
$row = mysqli_num_rows($result);


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
							<label><?php echo $_SESSION['usuario'].$_SESSION['adm']?></label>
						   <a class="btn btn-outline-light" href="logout.php">Sair</a>
						</form>
			</div>
	</nav>
			<!--Fim do cabeçalho.-->
				
		<table class="table">
			  <thead>
					<tr>
					  <th scope="col">Código</th>
					  <th scope="col">CPF</th>
					  <th scope="col">Nome</th>
					  <th scope="col">Curso</th>
					  <th scope="col">Ano</th>
					  <th scope="col">Turma</th>
					  <th scope="col">Duração</th>
					  <th scope="col">Área</th>
					  <th scope="col">Cidade</th>
					  <th scope="col">Unidade</th>
					  <th scope="col">Box</th>
					  <th scope="col">Prateleira</th>
					</tr>
			  </thead>
			  <tbody>

				<?php 
					if($row == 0){
						echo "Nenhum Documento encontrado";
					}else{
						while($rows_registros = mysqli_fetch_assoc($result)) { ?>
					
				
					<tr>
					  <td><?php echo $rows_registros['id_'.$tipo]; ?></td>
					  <td><?php echo $rows_registros['cpf']; ?></td>
					  <td><?php echo $rows_registros['nome']; ?></td>
					  <td><?php echo $rows_registros['curso']; ?></td>
					  <td><?php echo $rows_registros['ano']; ?></td>
					  <td><?php echo $rows_registros['turma']; ?></td>
					  <td><?php echo $rows_registros['duracao']; ?></td>
					  <td><?php echo $rows_registros['area']; ?></td>
					  <td><?php echo $rows_registros['cidade']; ?></td>
					  <td><?php echo $rows_registros['unidade']; ?></td>
					  <td><?php echo $rows_registros['box']; ?></td>
					  <td><?php echo $rows_registros['prateleira']; ?></td>
					  

					</tr>
				<tr>
				
				<?php } }?>
			  </tbody>
		</table>
		
		<footer>
			<img src="senai.png" >
		</footer>	
</body>
</html>			