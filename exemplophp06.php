<?php 


    $ano = 2024;

    function exibir(){
    	GLOBAL $ano;
    	$ano++;
    	return $ano;
    }

    echo "<br /> Ano: ".$ano;
    echo "<br /> Ano: ".exibir();
    echo "<br /> Ano: ".exibir();
    echo "<br /> Ano: ".$ano;

 ?>