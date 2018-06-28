<html>
	<head>
		<title>Grupo Seven Brasil</title>
		<meta charset="UTF-8">
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">		
		<?php
		require "../configuracoes.php";
		?>
<!--Icone-->
		<link rel="shortcut icon" type="text/css" href="../imagens/sistema.ico">
<!--Bibliotecas-->
		<link rel="stylesheet" type="text/css" href="../biblioteca/normalize.css">
		<script type="text/javascript" src="../biblioteca/jquery-3.2.1.min.js"></script>
<!--Estilo-->
		<link rel="stylesheet" type="text/css" href="../css/style-v1-1.css">
<!--javascript-->
		<script type="text/javascript" src="../script/script-v1-1.js"></script>
		<script type="text/javascript" src="../script/verificador-v1-1.js"></script>
<?php
session_start();

if(isset($_SESSION['usuario']) && ($_SESSION['usuario'] != "")){
	$usuario=$SESSION['usuario'];
	$nome_pf=$SESSION['nome_pf'];
	$sobrenome_pf=$SESSION['sobrenome_pf'];
	$email_pf=$SESSION['email_pf'];
	
}else{
	header("Location:../index.php");
}
