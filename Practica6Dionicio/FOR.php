<?php 
// ESTRUCTURA ESTANDAR
/*for ($i=1; $i <=10; $i++) { 
	echo "$i";
}
*/


//ESTRUCTURA POR CONDICION 
//declaracion de variables y contador
/*
for ($i=1;; $i++) { 
	if ($i>10) 
	{
		break;
	}
	echo "$i";
}
*/


// 3 ESTRUCTURA MULTIPLE
// declaracion de la variable contador fuera
//contador esta dentro de la estructura
//La condicion esta fuera de la estructura

$i=1;

for (;;) { 
	if ($i>10) 
	{
		break;
	}
	echo "$i <br>";
	$i++;
}

//SELECCION TODO EN UNO
for ($i=1; $i<= 10; print $i.$i++) { 
	
}

?>