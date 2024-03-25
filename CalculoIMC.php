<?php 

$nome = "Leonardo";
$peso = 60.00;
$altura = 1.67;

function calcular ($num1,$num2,$num3){
	return ($num1/($num2*$num3));
}

$resp = calcular($peso,$altura,$altura);

printf ("Olá $nome seu peso é de $peso Kilos, sua altura é $altura Metros e seu IMC é de %.2f", $resp);

 ?>