<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Atualização de Montadoras</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_montadora=$_POST['cmb_montadora'];
    $up_montadora=$_POST['txt_montadora'];
    $sql="UPDATE montadora SET montadora='$up_montadora' WHERE cod_montadora=$cod_montadora";
    $conn->query($sql);
    echo "<h4>Montadora atualizada com sucesso</h4><h3><a href='/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>

