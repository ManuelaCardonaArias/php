<?php 

//EJ #1
//Función flecha
$multiplicar=fn($num)=>$num*5; 
//Resultado
echo $multiplicar(4);

echo "\n"; 
//EJ #2
//Array de numeros
$arrayNum=[1,2,3,4];
//Función flecha
$duplicar=array_map(fn($n)=>$n*2,$arrayNum);
//Imprimiendo Resultado final
print_r($duplicar);

echo "\n";

//EJ #3
//Función flecha que devuleve otra función
$sumaFn=fn($numero1)=>fn($numero2)=>$numero1+$numero2;$sumar=$sumaFn(5);
echo $sumar(6);

echo "\n";
//EJ #4
$multiplicador=3;
$multiplicar=fn($num)=>$num*$multiplicador;
echo $multiplicar(5);
?>