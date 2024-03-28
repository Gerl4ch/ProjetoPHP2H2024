<?php 

$nome = "Leonardo";
$peso = 60.00;
$altura = 1.67;

function calcular ($num1,$num2,$num3){
	return ($num1/($num2*$num3));
}

$resp = calcular($peso,$altura,$altura);

printf ("Olá $nome seu peso é de $peso Kilos, sua altura é de $altura Metros e seu IMC é de %.2f <br />", $resp);

if($resp <= 18.5){
	echo "Você está abaixo do peso ! <br />";
}elseif($resp >= 18.6 && $resp <=24.9){
	echo "Você está no peso ideal ! <br />";
}elseif($resp >= 25.0 && $resp <= 29.0){
	echo "Você está levemente acima do peso ! <br />";
}elseif($resp >= 30.0 && $resp <= 34.9) {
	echo "Você está com Grau I de Obesidade ! <br />";
}elseif($resp >= 35.0 && $resp <= 39.9) {
	echo "Você está com Grau II de Obesidade (Severa) ! <br />";
}elseif ($resp > 40.0) {
	echo "Você está com Grau III de Obesidade (Mórbida) ! <br />";
}else{
	echo "Obrigado <br />";
}


 ?>
