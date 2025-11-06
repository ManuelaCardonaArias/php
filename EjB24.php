<?php
//EJ #1
function contadorDescendente($num = 10)
{
    //si el numero es menor a 1 se deteniede la recursión
    if ($num < 1) {
        return;
    }
    echo "Número: $num \n";

    //LLamada a la función decrementando el número
    contadorDescendente($num - 1);
}
//LLamando la función inicial
contadorDescendente();

echo "\n";
//EJ #2
function factorialNum($num)
{
    //Condicional para aceptar solo números positivos
    if ($num < 0) {
        return "Error: No se aceptan números NEGATIVOS";
    } elseif ($num == 1 || $num == 0) {
        return 1;
    } else {
        return $num * factorialNum($num - 1);
    }
}
echo "El factorial es: " . factorialNum(5);
echo "\n";

//EJ #3
function secuenciaFibonacci($num)
{
    //caso base los dos primeros numeros de la secuencia son 0 y 1
    if ($num == 0) {
        return 0;
    } elseif ($num == 1) {
        return 1;
    } else {
        //Recursividad: Suma de los dos anteriores llamando a la función
        return secuenciaFibonacci($num - 1) + secuenciaFibonacci($num - 2);
    }
}
echo secuenciaFibonacci(6);
echo "\n";
//EJ #4
function sumarArray($array)
{
    // Caso base: si el arreglo tiene un solo elemento, devuelve ese elemento
    if (count($array) == 1) {
        return $array[0];
    } else {
        // Toma el primer elemento y suma el resultado de la función aplicada al resto del arreglo
        return $array[0] + sumarArray(array_slice($array, 1));
    }
}

$numeros = [1, 2, 3, 4, 5];
echo sumarArray($numeros);
echo "\n";


//EJ #5
function invertirCadena($cadena)
{
    //strlen devuelve la longitud de la cadena
    if (strlen($cadena) <= 1) {
        return $cadena;
    } else {
       //substr otione el ultimo caracter              Obtione el resto de la cadena
        return substr($cadena, -1) . invertirCadena(substr($cadena, 0, -1));
    }
}

echo invertirCadena("PHP") . "\n";  
echo invertirCadena("Hola"). "\n";


//EJ #6
function trianguloDoble($n, $nivel = 1) {
    // condicional que detiene cuando el nivel supera el total
    if ($nivel > $n) {
        return;
    }

    // Calculamos los espacios y los asteriscos
    //str_repeat funcion que repite una cadena
    $espacios = str_repeat(" ", $n - $nivel);
    $asteriscos = str_repeat("*", $nivel * 2);

    // Imprimir la fila
    echo $espacios . $asteriscos . "\n";

    // Llamada recursiva para la siguiente fila
    trianguloDoble($n, $nivel + 1);
}

trianguloDoble(5);
echo "\n";

//EJ #7
function compararElementos($numeros){
    //Si solo queda un elemento ese será el mayor
if(count($numeros) == 1){
    return $numeros[0];
}

    // Llamada recursiva: obtener el mayor del resto del arreglo
    //array_slice toma una parte del arreglo
    $mayorDelResto = compararElementos(array_slice($numeros, 1));

    // Compara el primer elemento con el mayor del resto
    if ($numeros[0] > $mayorDelResto) {
        return $numeros[0];
    } else {
        return $mayorDelResto;
    }
}

$numeros = [3, 5, 1, 8, 2];
echo compararElementos($numeros);
echo "\n";

//EJ #8
function sumaDigitos($num) {
    // si el número es 0, ya no hay más dígitos que sumar
    if ($num == 0) {
        return 0;
    } else {
        // Último dígito + suma de los dígitos restantes
        //intval convierte un valor en entero Int
        return ($num % 10) + sumaDigitos(intval($num / 10));
    }
}

echo sumaDigitos(1234); 