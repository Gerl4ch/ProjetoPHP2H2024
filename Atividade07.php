<?php 

$quant = 240;

$cli1;
$mesas1 = 15;
$lugares1 = $mesas1 * 6;

$cli2;
$mesas2 = 20;
$lugares2 = $mesas2 * 6;

$cli3;
$mesas3 = 5;
$lugares3 = $mesas3 * 6;

$cli4;
$mesas4 = 2;
$lugares4 = $mesas4 * 6;


if ($lugares1 <= $quant) {
	echo "Você reservou $mesas1 mesas com  $lugares1 lugares <br />";
	$quant = $quant - $lugares1;
}else{
	echo "Não há mais reservas disponíveis! <br />";
	echo "Digite 0 para sair <br />";
}

if ($lugares2 <= $quant) {
	echo "Você reservou $mesas2 mesas com  $lugares2 lugares <br />";
	$quant = $quant - $lugares2;
}else {
	echo "Não há mais reservas disponíveis! <br />";
	echo "Digite 0 para sair <br />";
}

if ($lugares3 <= $quant) {
	echo "Você reservou $mesas3 mesas com  $lugares3 lugares <br />";
	$quant = $quant - $lugares3;
}else{
	echo "Não há mais reservas disponíveis! <br />";
	echo "Digite 0 para sair <br />";
}

if ($lugares4 <= $quant) {
	echo "Você reservou $mesas4 mesas com  $lugares4 lugares <br />";
	$quant = $quant - $lugares4;
}else {
	echo "Não há mais reservas disponíveis! <br />";
	echo "Digite 0 para sair <br />";
}



// Leonardo Gerlach, Julia Ferreira
?>