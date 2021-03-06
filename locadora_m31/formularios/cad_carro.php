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
<h1>Cadastro de veículo</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_carro.php">
    <table>
	<tr><td><label>Carro:</label>
    <input placeholder="Insira o nome do carro" type="text" name="txt_carro"/>
    </td></tr>
    <tr><td><label>Montadora:</label>
    <?php
    include ("../controle/conexao.php");
    try{
        $sql = 'SELECT * FROM montadora ORDER BY montadora';
        print "<select name='cmb_montadora'>";
        foreach($conn->query($sql) as $row) {
            print "<option value='".$row['cod_montadora']."'>".$row['montadora']."</option>";
        }
        print "</select>";
    }
    catch(PDOException $ex){
        echo 'Erro '. $ex->getMessage();
    }
    ?>
    </td></tr>
    <tr><td><label>Tipo:</label>
    <?php
    include ("../controle/conexao.php");
    try{
        $sql = 'SELECT * FROM tipo ORDER BY tipo';
        print "<select name='cmb_tipo'>";
        foreach($conn->query($sql) as $row) {
            print "<option value='".$row['cod_tipo']."'>".$row['tipo']."</option>";
        }
        print "</select>";
    }
    catch(PDOException $ex){
        echo 'Erro '. $ex->getMessage();
    }
    ?>
    </td></tr>
    <tr><td><label>Valor:</label>
    <input placeholder="Insira o Valor do Carro" type="text" name="txt_valor"/>
    </td></tr>
    <tr><td><input type="submit" value="Cadastrar">
    </td></tr>
    </table>
</form>
</fieldset></div></div></body></html>
