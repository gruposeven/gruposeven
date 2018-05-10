
<?php
require "configuracoes.php";


if(isset($_POST['usuario']) && ($_POST['usuario'] != "") && isset($_POST['senha']) && ($_POST['senha'] != "")){
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$ip_usuario = $_SERVER["REMOTE_ADDR"];
	$acesso = date("d/m/Y H:i:s");
	$timeacesso = time();


	if($usuario != "11111111111" && $senha !="222222"){
		echo "Usuário e/ou Senha incorreto(s)<br>Tente novamente";

	}else{
	}

}



?>