<?php 
//EJ #1
$num1=10;
$num2=3;

//Suma
echo "La suma de ".$num1." y ".$num2." es: ".$num1+$num2."<br>";
//Resta
echo "La resta de ".$num1." y ".$num2." es: ".$num1-$num2."<br>";
//Multiplicación
echo "La multiplicación de ".$num1." y ".$num2." es: ".$num1*$num2."<br>";
//División  //condicional elvis para evitar division por 0
$division = ($num2 !=0) ? ($num1/$num2) : "Error: No se puede dividir por 0";
echo "La división de ".$num1." y ".$num2." es: ".$division."<br>";
//Módulo
echo "El módulo de ".$num1." y ".$num2." es: ".$num1%$num2."<br>";
//Exponenciación
echo "La exponenciación de ".$num1." y ".$num2." es: ".$num1**$num2."<br>";

echo "<hr>";

//EJ #2
$num01=10;
$num02=5;
//Usando operadores de asginación y adición
//Suma
$num01+=$num02; // $num1 = $num1 + $num2
echo "Después de sumar \$num02 con \$num01 y almacenar el resultado en \$num01 su valor es: ".$num01."<br>";
//Resta
$num01-=$num02;
echo "Después de restar \$num02 con \$num01 y almacenar el resultado en \$num01 su valor es: ".$num01."<br>";
//Multiplicación
$num01*=$num02;
echo "Después de multiplicar \$num02 con \$num01 y almacenar el resultado en \$num01 su valor es: ".$num01."<br>";
//División
$num01/=$num02;
echo "Después de dividir \$num02 con \$num01 y almacenar el resultado en \$num01 su valor es: ".$num01."<br>";
//Módulo
$num01%=$num02;
echo "Después de sacar el módulo \$num02 con \$num01 y almacenar el resultado en \$num01 su valor es: ".$num01."<br>";

echo "<hr>";

//EJ #3
function operaciones($num1,$num2){
    if ($num2!=0){
        $num1/=$num2;
     echo "División : ".$num1."<br>";
     $num1%=$num2;
     echo "Residuo : ".$num1;
    }else {
        echo "Error: el divisor no puede ser 0.";
    }
}

operaciones(20,5);
echo "<hr>";
//EJ #4
$n1=1;
$n2=3;
$n3=3;
$n4="3";
//Comparación n1 n2 
echo "$n1 (".gettype($n1).") y $n2 (".gettype($n2).") ¿Son iguales en valor? ".($n1==$n2 ? " Si":" No")."<br>";

//Comparación n2 y n3
echo "$n2 (".gettype($n2).") y $n3 (".gettype($n3).") ¿Son iguales en valor? ".($n2==$n3 ? " Si":" No")."<br>";

//Comparación n3 y n4
echo "$n3 (".gettype($n3).") y $n4 (".gettype($n4).") ¿Son iguales en valor? ".($n3==$n4 ? " Si":" No")."<br>";

//Comparación n3 y n4 valor y tipo
echo "$n3 (".gettype($n3).") y $n4 (".gettype($n4).") ¿Son iguales en valor y tipo ? ".($n3===$n4 ? " Si":" No")."<br>";

echo "<hr>";

//EJ #5
function compararNumeros($num1,$num2){
//1.Comparar ambos números
if($num1<$num2){
    echo "El número $num1 es menor que $num2";
}elseif($num1>$num2){
echo "El número $num1 es mayor que $num2";
}else{
    echo"Ambos números son iguales";
}
echo "<br>";
//2.Determinar rangos y relaciones
if($num1<=10){
echo "El número $num1 es pequeño.";
}elseif($num1>=50){
echo "El número $num1 es grande.";
}elseif($num2>= 20 && $num2 <=40){
    echo "El número $num2 está en el rango medio (20-40)";
}
echo "<br>";
//Mostrar el número mas grande
if($num1>$num2){
    echo "$num1 es el número más grande.";
}elseif($num1<$num2){
    echo "$num2 es el número más grande.";
}else {
    echo "Ambos números son iguales";
}
}
compararNumeros(9,80);
echo "<hr>";

//EJ #6.1
//comprobar si dos números son pares
function pares($num1,$num2){
    //usando elvis
  echo  ($num1%2 == 0 && $num2%2 == 0)? "Ambos son pares":"false";
}
pares(3,6);
echo "<hr>";
//EJ #6.2
//comprobar si almenos uno de los dos numeros es positivo
function numpositivo($num1,$num2){
    if($num1>0 || $num2>0){
echo "Al menos uno de los números es positivo";
    }else{
        echo "Ambos números son negativos o cero";
    }
    echo "<br>";
}
numpositivo(5,10);
numpositivo(-5,3);
numpositivo(-1,0);
numpositivo(-12,-20);

echo "<hr>";
//EJ #7
function numPares($estado){
    //usando elvis
    echo "Estado actual: ".($estado ? "Encendido (true)" : "Apagado (false)")."<br>";
$estado = !$estado;
//usando elvis
echo "Nuevo estado: ".($estado ? "Encendido (true)":"Apagado (false)")."<br>";
}
numpares(true);

echo "<hr>";

//EJ #8
 $precio = 100;

    echo "Precio original: $precio € <br>";
    echo "Añade un 1€ de propina al precio original " . ++$precio . "€  imprimiendo el nuevo precio con la propina <br>";
    echo "Aplicado 5€ de impuestos:" . ($precio+=5) . " € <br><br>";

    echo "Vaya! Nos han cobrado un artículo por error de más. <br>";
    echo "Quita 10€ del total: " . ($precio-=10) . "€.<br>";
    echo "Además de esto, quita el 1€ de impuestos. Por tanto, el total que nos han costado los productos será: " . $precio--; 

    echo "<hr>";
    //EJ #8.1
     // Iniciamos con una cadena vacía
    $frase = "";

    // Concatenamos diferentes partes de la frase
    $frase .= "Hoy "; // Agregamos "Hoy"
    echo $frase . "<br>"; // Mostramos la frase hasta ahora

    $frase .= "es "; // Agregamos "es"
    echo $frase . "<br>"; // Mostramos la frase hasta ahora

    $frase .= "un "; // Agregamos "un"
    echo $frase . "<br>"; // Mostramos la frase hasta ahora

    $frase .= "buen "; // Agregamos "buen"
    echo $frase . "<br>"; // Mostramos la frase hasta ahora

    $frase .= "día."; // Agregamos "día."
    echo $frase . "<br>"; // Mostramos la frase completa

    // Resultado final
    echo "Frase completa: " . $frase . "<br>"; // Imprime: Hoy es un buen día.
 
    echo "<hr>";

    //EJ #9.1
 // Definir los códigos de colores ANSI
    $rojo = "\033[31m";
    $verde = "\033[32m";
    $azul = "\033[34m";
    $reset = "\033[0m";  // Resetea al color predeterminado

    // Día 1: creando el array $mochila1
    echo $rojo . "********************************************************************************$reset \n";
    echo $rojo . "Introducción: El 🧝aventurero🧝 inicia su viaje con una lista de objetos $reset \n";
    $mochila1 = ["⚔️", "🛡️", "🧪"];
    echo $verde . "Día 1 - La 🎒mochila🎒 contiene: ";
    print_r($mochila1);
    echo $rojo . "********************************************************************************$reset \n";
//EJ #9.1
 // Día 1: creando el array $mochila1
    echo $rojo . "********************************************************************************\n$reset";
    echo $rojo . "Introducción: El 🧝aventurero🧝 inicia su viaje con una lista de objetos $reset \n"  . $reset;
    $mochila1 = ["⚔️", "🛡️", "🧪"];
    echo $verde . "Día 1 - La 🎒mochila🎒 contiene: ";
    print_r($mochila1);
    echo $rojo . "********************************************************************************\n$reset";

    // Día 2: creando el array $mochila2
    $mochila2 = ["🔦", "🧭"];
    echo $rojo . "Día 2: El 🧝aventurero🧝 recoge nuevos objetos\n$reset";
    echo $verde . "Día 2 - Nuevos objetos recogidos: \n";
    print_r($mochila2);
    echo $rojo . "********************************************************************************\n$reset";
//EJ #9.3
 $mochila1 = ["⚔️", "🛡️", "🧪"];
    $mochila2 = ["🔦", "🧭"];

    // Unimos los dos arrays. Salida: ["⚔️", "🛡️", "🧪", "🧭"];
    $mochilaTotal = array_merge($mochila1, $mochila2); 

    // Imprimimos la mochila combinada
    print_r($mochilaTotal); // Salida: ["⚔️", "🛡️", "🧪", "🧭"];
//EJ #10
  // Definimos una variable $precio que podría no estar definida (null)
    $precio = null;

    // Usamos el operador de fusión de null (??) para asignar 50 si $precio es null
    $precioFinal = $precio ?? 50;

    // Usamos el operador ternario para verificar si el envío es gratuito o no
    $envio = ($precioFinal >= 100) ? "Envío gratuito" : "Envío no gratuito";

    // Mostramos el precio final y el estado del envío
    echo "Precio del producto: " . $precioFinal . " euros\n";
    echo $envio;

?>