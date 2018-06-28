<?php
date_default_timezone_set('America/Sao_Paulo');

//Configuraчуo de Versуo 
$versao = "1.1";
$date_versao = date("d/m/Y H:i:s", mktime(21,0,0,5,9,2018)); // Versуo 1.1 implantada em 09/05/2017 as 21:00 
$time_versao = mktime(21,0,0,5,9,2018); // data de implantaчуo em formato timestamp
$fuso_time_atual = strtotime("+3 Hours", time()); //Time atual + 3 Hours
$date_atual = date("d/m/Y H:i:s"); //Data Atual
$diferenca_tempo = $fuso_time_atual - $time_versao; // Diferenчa de Tempo 
$tempo_versao = date("d/m/Y H:i:s", $diferenca_tempo); // Tempo de duraчуo da versуo 


//Conexуo ao Banco de Dados


$dsn = 'mysql:dbname=sistemaseven;host=localhost'; //conexуo banco de dados servidor interno (Versуo BETA)

//$dsn = "mysql:dbname=sistemaseven;host=sistemaseven.mysql.dbaas.com.br";//conexуo banco de dados servidor externo

$dbuser = "sistemaseven";
$dbpass = "g7811215";
try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

    $pdo->exec("SET CHARACTER SET utf8");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

}catch(PDOException $erro){
	echo "Falha de Conexуo com Servidor ".$erro->getMessage(); //Para saber qual o erro da conexуo retire as 2 barras
}


?>