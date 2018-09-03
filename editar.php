<?php
	
	include_once("conexao.php");
	$result_registros = "SELECT * FROM registros";
	$resultado_registros = mysqli_query($conn, $result_registros);


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
							<label>Nome: </label>
						   <a class="btn btn-outline-light" href="index.html">Sair</a>
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
				<?php while($rows_registros = mysqli_fetch_assoc($resultado_registros)) { ?>
					
				
					<tr>
					  
					  <td><?php echo $rows_registros['id']; ?></td>
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
					  
					  <td>
					    <a href="editar1.php"><button type="button" class="btn btn-outline-success btn-sm">Editar</button></a>
						
					 </td>	
					 
					</tr>
				<tr>
				
				<?php } ?>
			  </tbody>
		</table>
		
		<footer>
			<img src="senai.png" >
		</footer>	
</body>
</html>			