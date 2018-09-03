<?php

session_start();
include_once('conexao.php');
include('verificarlogin.php');

    $nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$ano = $_POST['ano'];
	$curso = $_POST['curso'];
	$turma = $_POST['turma'];
	$duracao = $_POST['duracao'];
	$area = $_POST['area'];
	$cidade = $_POST['cidade'];
    $unidade = $_POST['unidade'];
    $box = $_POST['box'];
    $prateleira = $_POST['prateleira'];
    $tipo = $_POST['tipo'];

     $cadastrar = "INSERT INTO $tipo (cpf,nome,curso,ano,turma,duracao,area,cidade,unidade,box,prateleira) Values ('$cpf','$nome','$curso','$ano','$turma','$duracao','$area','$cidade','$unidade','$box','$prateleira')";

    if(mysqli_query($conn, $cadastrar)){
        header("Location: adicionar.php?ok=true");
    } else{
        header("Location: adicionar.php?erro=".mysqli_error($conn)); 
    }
       
?>