<?php
//EJ #1.1

		$resultado = 8 + 2 * 5 - 10 / 2;
		echo $resultado; // 13
echo "\n";
//EJ #1.2
$resultado = (8 + 2) * (5 - 10) / 2;
	echo $resultado; // -25
echo "\n";
//EJ #2
	$a = true || false && false;
		var_dump($a); 
/*La respuesta es true , ya que primero se evalua el condiconal
and && y luego el or ||, por lo cual al ser una de las dos verdaderas
el condional es trues
*/
echo "\n";
//EJ #3
	$x = 10;
		$y = $x += 5 - 3 * 2;
		echo "x: $x, y: $y"; //y=9 
echo "\n";
//EJ #4
$resultado = 15 / 5 + 2 * (8 - 3);
		echo $resultado; // 13
echo "\n";

//EJ #5
$result= (4-2) * 10 /2 + (5*2); 
echo $result;
?>