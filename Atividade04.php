<?php 

$num1 = 50;
$num2 = 20;
$num3 = 30;
$cont = 0;
$t = 0;
for ($cont; $cont < 10; $cont++){
    if ($num1 > $num2){
        $t = $num1;
        $num1 = $num2;
        $num2 = $t;

    }else if($num2 > $num3){
        $t = $num2;
        $num2 = $num3;
        $num3 = $t;
    }
}
echo "$num3, $num2, $num1";

//Leonardo Gerlach, Julia Ferreira

 ?>