<?php
session_start();
include_once('conexao.php');

$tipo = $_GET['tipo'];
$id = $_GET['id'];

echo "tipo= .id_".$tipo;
echo "id = ".$id;
if($tipo == 'certificados'){
    $result = mysqli_query($conn, "DELETE FROM certificados WHERE id_certificados = '$id'");
    echo "certificado apagado";
}

if($tipo == 'dossie'){
    $result = mysqli_query($conn, "DELETE FROM dossie WHERE id_dossie = '$id'");
    echo "dossie apagado";
}

if($tipo == 'registros'){
    $result = mysqli_query($conn, "DELETE FROM registros WHERE id_registros = '$id'");
    echo "registro apagado";
}

    if(mysqli_affected_rows($conn)){
        header('Location: excluir.php?ok=true');
    } else {
      header('Location: excluir.php?erro='.mysqli_error($conn));
    }

?>