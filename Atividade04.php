<?php 

$valor1 = 13;
$valor2 = 11;
$valor3 = 12;
$cont = 0;
$t = 0;
while ($cont < 5) {
	if ($valor1 > $valor3){
		$t = $valor1;
		$valo1 = $valor2;
		$valor1 = $t;
}elseif ($valor2 > $valor3) {
	$t =  $valor2;
	$valor2 = $valor3;
	$valor3 = $t;}
	$cont++;
}
echo "$valor1, $valor2, $valor3";

//Leonardo Gerlach, Julia Ferreira
 ?>