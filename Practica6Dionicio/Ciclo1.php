<?php 

/* PRIMER CICLO
$i=1;

do {
	echo "";
	print $i;
} while ($i>10);*/


/* SEGUNDO CICLO
$i; $num2y3=0; $num3=0; $num2=0;

$i=0;
while ($i<= 10) {
	print $i++;
}*/


/*TERCER EJERCICIO*/

$i=1; $num2y3=0; $num3=0; $num2=0;

while ($i <= 10) {

	if (($i % 2==0) AND ($i % 3==0)) 
	{
		echo "$i es multiplo de 2 y de 3. <br>";
		$num2y3 +=1; /*Significa que los va a sumar*/
	}
	elseif ($i%2==0) 
	{
		echo "$i es multiplo de 2.<br>";
		$num2+=1;

	}elseif ($i%3==0) 
	{
		echo "$i es multiplo de 3.<br>";
		$num3+=1;
	} else 
	{
		echo "$i no es multiplo de 2 ni de 3 <br>";
	}

	$i+=1;
}
echo "________________________________ <br>";
echo "$num2y3 son multiplos de 2 y 3 <br>";
echo "$num3 son multiplos de 3 <br>";
echo "$num2 son multiplos de 2 <br>";
echo "Los restantes" . (10-$num2y3-$num2-$num3). "numeros no son multiples de 2 ni de 3";

?>