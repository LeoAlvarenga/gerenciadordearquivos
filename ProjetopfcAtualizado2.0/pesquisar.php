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
	$tipo = $_GET['tipo'];
	
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
	
	
	$result = mysqli_query($conn, "SELECT * FROM $tipo WHERE cpf='$cpft'".$nomep.$cursop.$anop.$turmap.$duracaop.$areap.$cidadep.$unidadep);
	
	$row = mysqli_num_rows($result);

?>
<!DOCTYPE html>

<html>
<head>
    <title>Gestão de Arquivos NDI.</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <header>
		<p><h1><center><br>
		</br><a href="logout.php">SAIR</a></center></h1></p>
		
	</header>
    <body>
		<section class="menu-pesquisa">
			<nav>
				<?php
					if($row == 0){
						echo "Documento não encontrado";
					}else{
						while($resultado = mysqli_fetch_assoc($result)){
						echo "ID: ".$resultado['id']."   NOME: ".$resultado['nome']."   CPF: ".$resultado['cpf']."   CURSO: ".$resultado['curso']."   ANO: ".$resultado['ano']."   TURMA: ".$resultado['turma']."   DURAÇÃO DO CURSO: ".$resultado['duracao']."   ÁREA: ".$resultado['area']."   CIDADE: ".$resultado['cidade']."   UNIDADE: ".$resultado['unidade']."   BOX: ".$resultado['box']."   PRATELEIRA: ".$resultado['prateleira'];
						}
					}
				?>
			
			</nav>
		
		
		</section>
		
    </body>
</html>