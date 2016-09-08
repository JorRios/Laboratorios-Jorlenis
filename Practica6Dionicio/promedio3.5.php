<?php 

$est=1;
$prom=0;

while ($est<5) 
{
	$nota1=rand(0,5);
	$nota2=rand(0,5);
	$nota3=rand(0,5);
	$nota4=rand(0,5);

	echo "Estas son las notas de los estudiantes $est <br>";
	echo "La primera nota es: $nota1 <br>";
	echo "La segunda nota es: $nota2 <br>";
	echo "La segunda nota es: $nota3 <br>";
	echo "La segunda nota es: $nota4 <br>";

	$prom = ($nota1+$nota2+$nota3+$nota4)/4;
	if ($prom == 3.5) 
	{
		
		echo "Usted a ganado $prom <br>";
	}
	elseif ($prom<3.5) 
	{
		echo "Usted perdio $prom <br>";
	}
	elseif ($prom == 5) 
	{
		echo "No pierde, Ni gana $prom <br>";
	}

	$est++;
}
?>