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
		<link rel="stylesheet" type="text/css" href="../biblioteca/bootstrap.min.css">
		<script type="text/javascript" src="../biblioteca/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../biblioteca/bootstrap.bundle.min.js"></script>

<!--Estilo-->
		<link rel="stylesheet" type="text/css" href="css-sistema/style-sistema.css">
<!--javascript-->
		<script type="text/javascript" src="script-sistema/script-sistema.js"></script>
<?php
session_start();

if(isset($_SESSION['usuario']) && ($_SESSION['usuario'] != "")){
	$usuario=$_SESSION['usuario'];
	$nome_pf=$_SESSION['nome_pf'];
	$sobrenome_pf=$_SESSION['sobrenome_pf'];
	$email_pf=$_SESSION['email_pf'];
	
}else{
	header("Location:../index.php");
}
?>

</head>
<body>
<!-- Navegação-->
	<div class="container">
		<?php
		require "menu_nav.php"
		?>
	</div>
</body>