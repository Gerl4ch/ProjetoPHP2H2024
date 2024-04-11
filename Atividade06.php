<?php 
// Leonardo Gerlach, Julia Ferreira

$n1 = 5;
$n2 = 6;
$soma1 = $n1 + $n2;
$media1 = $soma1 / 2;

$n3 = 7;
$n4 = 8;
$soma2 = $n3 + $n4;
$media2 = $soma2 / 2;

$n5 = 9;
$n6 = 10;
$soma3 = $n5 + $n6;
$media3 = $soma3 / 2;

$n7 = 7;
$n8 = 2;
$soma4 = $n7 + $n8;
$media4 = $soma4 / 2;

$n9 = 4;
$n10 = 3;
$soma5 = $n9 + $n10;
$media5 = $soma5 / 2;

$n11 = 4;
$n12 = 2;
$soma6 = $n11 + $n12;
$media6 = $soma6 / 2;

$aprov = 0;
$rec = 0;
$reprov = 0;

$classe = ($media1 + $media2 + $media3 + $media4 + $media5 + $media6) / 6;


if($media1 > 7){
	echo "O aluno 1 foi aprovado <br />";
	$aprov = $aprov + 1;
}elseif ($media1 > 3 && $media1 < 7) {
	echo "O aluno 1 ficou de recuperação <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 1 foi reprovado <br />";
	$reprov = $reprov + 1;
}


if($media2 > 7){
	echo "O aluno 2 foi aprovado <br />";
	$aprov = $aprov + 1;
}elseif ($media2 > 3 && $media2 < 7) {
	echo "O aluno 2 ficou de recuperação <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 2 foi reprovado <br />";
	$reprov = $reprov + 1;
}


if($media3 > 7){
	echo "O aluno 3 foi aprovado <br />";
	$aprov = $aprov + 1;
}elseif ($media3 > 3 && $media3 < 7) {
	echo "O aluno 3 ficou de recuperação <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 3 foi reprovado <br />";
	$reprov = $reprov + 1;
}


if($media4 > 7){
	echo "O aluno 4 foi aprovado <br />";
	$aprov = $aprov + 1;
}elseif ($media4 > 3 && $media4 < 7) {
	echo "O aluno 4 ficou de recuperação <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 4 foi reprovado <br />";
	$reprov = $reprov + 1;
}


if($media5 > 7){
	echo "O aluno 5 foi aprovado <br />";
	$aprov = $aprov + 1;
}elseif ($media5 > 3 && $media5 < 7) {
	echo "O aluno 5 ficou de recuperação <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 5 foi reprovado <br />";
	$reprov = $reprov + 1;
}


if($media6 > 7){
	echo "O aluno 6 foi aprovado <br /> <br />";
	$aprov = $aprov + 1;
}elseif ($media6 > 3 && $media6 < 7) {
	echo "O aluno 6 ficou de recuperação <br /> <br />";
	$rec = $rec + 1;
}else{
	echo "O aluno 6 foi reprovado <br /> <br />";
	$reprov = $reprov + 1;
}

echo "O total de alunos Aprovados foram de $aprov <br />";

echo "O total de alunos de Recuperação foram de $rec <br />";

echo "O total de alunos Reprovados foram de $reprov <br /> <br />";

printf("A média de notas da classe é de %.2f", $classe);
 ?>


