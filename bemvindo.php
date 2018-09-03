<?php
	
	session_start();
	include_once("conexao.php");
	include('verificarlogin.php');

	

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gestão de Arquivos NDI.</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="rodape.css"> 
	
	<script>  function formatar(mascara, documento)
			{   var i = documento.value.length;   
				var saida = mascara.substring(0,1);   
				var texto = mascara.substring(i)     
				if (texto.substring(0,1) != saida)
				{    documento.value += texto.substring(0,1);  
					}  
			}
			
			//validação de administrador
			<?php
			if($_GET['adm'] == 0){
				echo "alert('Usuário não possui permissões de Administrador!');";
			}?>
	</script>
	
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
							<label><?php echo $_SESSION['usuario']?> </label>
						   <a class="btn btn-outline-light" href="logout.php">Sair</a>
						</form>
			</div>
	</nav>
			<!--Fim do cabeçalho.-->
<form method="POST" action="pesquisar.php">
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
			</div>
			
			<div class="form-row pl-3">
				<div class="form-group col-md-5">
						<div class="nome">
							<label for="nome">Nome</label>
							<input type="nome" name="nome" id="nome" class="form-control border border-dark"/>
						</div>
				</div>	

				<div class="form-group col-md-2 pl-3">
					<div class="cpf">
						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="cpf" required maxlength="14" class="form-control border border-dark" onkeypress="formatar ('###.###.###-##',this);"/>
					</div>
				</div>
			</div>	
			
			<div class ="form-row">
			  <div class="form-group col-2 pl-3">
					<div class="ano">
						<label for="ano">Ano</label>
						<input type="text" name="ano" id="ano" class="form-control border border-dark">
					</div>	
			  </div>
			  
			  <div class="form-group col-2 pl-3">
					<div class="duracao">
						<label for="duracao">Duração</label>
						<input type="text" name="duracao" id="duracao"  class="form-control border border-dark">
					</div>	
			  </div>
			  <div class="form-group col-2 pl-3">
					<div class="turma">
						<label for="turma">Turma</label>
						<input type="text" name="turma" id="turma" class="form-control border border-dark"/>
					</div>	
			  </div>
			  
		    </div>
			<div class="form-row">
				<div class="form-group col-md-3 pl-3">
					<label for="area"> Área </label>
						<select name="area" class="form-control border border-dark">
							<option value="">Escolha uma area</option>
							<option value="1">Tecnologia</option>
							<option value="2">Alimentos</option>
						</select>
				  </select>
				</div>
				
				<div class="form-group col-md-3 pl-3">
					<label for="curso">Curso</label>				
						<select name="curso" class="form-control border border-dark">
							<option value="">Escolha um curso</option>
							<option value="1">Informática</option>
							<option value="1">Segurança do Trabalho</option>
						</select>
				</div>
    
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-3 pl-3">
					<label for="cidade"> Cidade</label>
						<select name="cidade" class="form-control border border-dark">
							<option value="">Escolha uma cidade</option>
							<option value="1">Lauro de Freitas</option>
							<option value="1">Salvador</option>
						</select>
				</div>
				
				<div class="form-group col-md-3 pl-3">
					 <label for="unidade">Unidade</label>
						<select name="unidade" class="form-control border border-dark">
							<option value="">Escolha uma unidade</option>
							<option value="1">Cimatec</option>
							<option value="1">Cetind</option>
							<option value="1">Dendezeiros</option>
						</select>
				</div>  
			</div>

			<button type="submit" class="btn btn-outline-success ml-4" value="pesquisar">Pesquisar</button>
		
		<!--Fim do formulário -->
		<script>
			<!--Mascára para cpf-->
		$(document).ready(function() {
		$('#cpf_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cpf: {
                validators: {
                    callback: {
                        message: 'CPF Invalido',
                        callback: function(value) {
       //retira mascara e nao numeros       
       cpf = value.replace(/[^\d]+/g,'');    
       if(cpf == '') return false; 
           
       if (cpf.length != 11) return false; 
       // testa se os 11 digitos são iguais, que não pode.
       var valido = 0; 
       for (i=1; i < 11; i++){
        if (cpf.charAt(0)!=cpf.charAt(i)) valido =1;
       }
       if (valido==0) return false;
       //  calculo primeira parte  
       aux = 0;    
       for (i=0; i < 9; i ++)       
        aux += parseInt(cpf.charAt(i)) * (10 - i);  
        check = 11 - (aux % 11);  
        if (check == 10 || check == 11)     
         check = 0;    
        if (check != parseInt(cpf.charAt(9)))     
         return false;      
       //calculo segunda parte  
       aux = 0;    
       for (i = 0; i < 10; i ++)        
        aux += parseInt(cpf.charAt(i)) * (11 - i);  
       check = 11 - (aux % 11);  
       if (check == 10 || check == 11) 
        check = 0;    
       if (check != parseInt(cpf.charAt(10)))
        return false;       
       return true; 
								}
							}
						}
					}
				}
			});
		});
		</script>

       <script src="jquery-2.1.4.min.js"></script>
       <script src="jquery.validate.min.js"></script>
       <script>
             $(function(){
                    $("#form_contato").validate();
             });
       </script>	
	   	<footer>
			<img src="senai.png" >
		</footer>
</form>

	
  </body>

</html>