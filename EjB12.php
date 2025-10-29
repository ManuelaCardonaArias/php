<?php
//Crear función 

//1.Activa el modo estricto
declare(strict_types=1); 

//2.Creando Función restarNumeros con 2 parametros tipo int
//4. El :string devuelve el resultado en String
function restarNumeros(int $num1, int $num2): string{
//3.Restando los números
return "El resultado de la resta es: " . $num1 - $num2;
}
//5.Llama la función y muestra el resultado 
echo restarNumeros(2,7);

//6.
/*PHP fatak Error por que espera dos strings*/
	
?>