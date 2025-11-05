<?php
//EJ #1

function duplicarPorReferencia(&$var)
{
    //duplicar el valor a la variable original
    $var = $var * 2;
};
$numero = 4;
duplicarPorReferencia($numero);
echo $numero; // Debería imprimir: 8
echo "\n";
//EJ #2
function combinarTexto(...$cadena)
{
    //implode o join funcion que combina elementos de array en una sola cadena de texto usando un separador entre ellos
    return join("-", $cadena);
}

echo combinarTexto("Hola", "mundo", "PHP"); // Imprime: Hola-mundo-PHP
echo "\n";
echo combinarTexto("Uno", "Dos"); // Imprime: Uno-Dos

echo "\n";

//EJ #3
function filtrarPares(...$numeros)
{
    //array_filter() Filtra un array usando una función de callback.
    return array_filter($numeros, fn($n) => $n % 2 === 0);
}
print_r(filtrarPares(1, 2, 3, 4, 5, 6)); // [2, 4, 6]

//EJ #4
function crearPerfil($nombre, $edad, $ciudad = "Desconocida")
{
    return "Nombre: $nombre, Edad: $edad, Ciudad: $ciudad \n";
}

echo crearPerfil(edad: 29, nombre: "Manuela");

echo crearPerfil(ciudad: "Cali", edad: 45, nombre: "Carolina");

echo "\n";

//EJ #5
//&$array Permite modificar el array original
function incrementarArray(array &$array, ...$valores)
{
    // Recorremos los valores adicionales y los agregamos al array original
    foreach ($valores as $valor) {
        //Añade elementos al final del array
        $array[] = $valor;
    }
}
$valores = [1, 2, 3];
incrementarArray($valores, 4, 5, 6);
print_r($valores);

echo "\n";

//EJ #6
function sumaOpcional($a, $b, $c = 0)
{
    return $a + $b + $c;
}
echo sumaOpcional(5, 3); // Imprime: 8

echo "\n";
echo sumaOpcional(5, c: 2, b: 3); // Imprime: 10


echo "\n";

//EJ #7
function generarReporte($titulo, ...$detalles)
{
    echo "$titulo\n";
    foreach ($detalles as $i => $detalle) {
        echo ($i + 1) . ".$detalle\n";
    }
}
generarReporte(
    "Reporte Semanal",
    "Ventas: 5000",
    "Clientes nuevos: 20",
    "Pedidos pendientes: 10"
);
//EJ #8
function ajustarPrecios(array &$precios)
{
    // Recorremos el array por referencia para modificar cada valor
    foreach ($precios as &$precio) {
        $precio = $precio * 0.9; // Aplicar descuento del 10%
    }
}
$precios = [100, 200, 300];
ajustarPrecios($precios);
print_r($precios);

echo "\n";
//EJ #9
function sumarPositivos(...$numeros)
{
    // 1 Filtrar solo los positivos
    $positivos = array_filter($numeros, fn($n) => $n > 0);

    // 2 Sumar los valores filtrados
    return array_sum($positivos);
}

//  Ejemplo de uso
echo sumarPositivos(1, -2, 3, -4, 5); // Imprime: 9
echo "\n";
//EJ #10
function saludarConNombre($nombre, $saludo = "Hola")
{
    return "$saludo, $nombre\n";
}

// Ejemplo de uso
echo saludarConNombre(nombre: "Cardona"); // Imprime: Hola, Bernal

echo saludarConNombre(nombre: "Manuela", saludo: "Bienvenid@"); // Imprime: Bienvenido, David
