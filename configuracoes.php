<?php
date_default_timezone_set('America/Sao_Paulo');
$date_versao = date("d/m/Y H:i:s", mktime(21,0,0,9,5,2018)); // Vers�o 1.1 implantada em 04/09/2017 as 21:00 
$time_versao = mktime(21,0,0,9,5,2018); // data de implanta��o em formato timestamp
$time_atual = time(); // tempo atual em formato timestamp
$diferenca = $time_atual - $time_versao; // tempo de dura��o da vers�o 1.1 em formato timestamp
$diferenca_date = date("d \d\i\a\s H:i:s", $diferenca); // tempo de dura��o da vers�o 1.1

?>