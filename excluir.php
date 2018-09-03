<?php
	
	include_once("conexao.php");
	


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
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<!--Formulário campos: Tipo de arquivo, nome, cpf, ano, duração, turma, área, curso, cidade, unidade -->
		<label>  </label>
			<div class="form-group col-md-2">
				<label for="tipoA">Escolha um tipo de arquivo</label>
					<select  class="form-control border border-dark" required name="tipo">
						<option value="">Tipo de arquivo</option>
						<option value="certificados">Certificado</option>
						<option value="dossie">Dossiê</option>
						<option value="registros">Registro</option>
					</select>
				<div>
					<button type="submit" class="btn btn-outline-success ml-4" value="pesquisar">Pesquisar</button>
				</div>
			</div>
			</form>

			<?php	
			if(isset($_POST['tipo'])){
				$tipo = $_POST['tipo'];
				$result_registros = "SELECT * FROM $tipo";
				$resultado_registros = mysqli_query($conn, $result_registros);
			?>
			
							
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
					  
					  <td>
					    <a href="funcaoexcluir.php?tipo=<?php echo $tipo;?>&id=<?php echo $rows_registros['id_'.$tipo]; ?>"><button type="button" class="btn btn-outline-danger btn-sm">Excluir</button></a>
						
					 </td>	
					 
					</tr>
				<tr>
				
				<?php }
					}
				?>

				<?php if(isset($_GET['ok'])) { ?> 
					<div class="alert alert-success" role="alert">
						Documento Excluído com Sucesso!
					</div>
				<?php } ?>

				<?php if(isset($_GET['erro'])) { 
					$erro = $_GET['erro'];?> 
					<div class="alert alert-danger" role="alert">
						Documento não pode ser Excluído! ERRO: <?php echo $erro;?>
					</div>
				<?php } ?>
			  </tbody>
		</table>
		
		<footer>
			<img src="senai.png" >
		</footer>	
</body>
</html>			