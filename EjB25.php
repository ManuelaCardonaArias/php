<?php
//EJ #1
function recibeNom($nombre, $apellido1, $apellido2)
{
    $nomAll = $nombre.$apellido1.$apellido2;
    echo "Longitud del nombre: " . strlen($nomAll)."\n";

    //strtouper/strtolower no incluye acentos
    echo "Nombre Mayúscula: " . strtoupper($nomAll) . "\n";
    echo "NOmbre Miniscúla: " . strtolower($nomAll) . "\n";

    // 2Convertir a mayúsculas y minúsculas (incluyendo acentos)
    echo "Nombre con Acento Msy: " . mb_strtoupper($nomAll, "UTF-8") . "\n";
    echo "Nombre con Acento Min" . mb_strtolower($nomAll, "UTF-8"). "\n";

    //Extraer las primeras dos letras del nombre
    echo "Primeras letras de cada cadena ".substr($nombre,0,2).substr($apellido1,0,2).substr($apellido2,0,2);

}
recibeNom("Manuela","Gonzáles","Arias");
echo "\n";
//EJ #2
//Generar números aleatorios
// Generar cinco números aleatorios entre 1 y 100 con dos decimales
$numeros = [];
for ($i = 0; $i < 5; $i++) {
    $numeros[] = round(mt_rand(1, 100) + mt_rand() / mt_getrandmax(), 2);
}

// Mostrar los números generados
echo "<b>Números generados:\n" . implode(", ", $numeros) . "\n";

//Calcular la media
$media = array_sum($numeros) / count($numeros);
echo "\nMedia:\n $media\n";

// Determinar si se redondea hacia arriba o hacia abajo
if ($media >= 50) {
    echo "\nMedia mayor o igual a 50 → Redondeo hacia arriba:\n";
    foreach ($numeros as $num) {
        echo "$num → " . ceil($num) . "\n";
    }
} else {
    echo "\nMedia menor que 50 → Redondeo hacia abajo:\n";
    foreach ($numeros as $num) {
        echo "$num → " . floor($num) . "\n";
    }
}

echo "\n";

// Encontrar el número mayor y menor
$mayor = max($numeros);
$menor = min($numeros);

echo "\nNúmero mayor:\n $mayor\n";
echo "\nNúmero menor:\n $menor\n";

//EJ #3
// 1 Mostrar la fecha y hora actuales en formato d-m-Y H:i:s
$fechaActual = date("d-m-Y H:i:s");
echo "\nFecha y hora actual:\n$fechaActual \n";

// 2 Calcular cuántos días faltan para el cumpleaños
// Cambia esta fecha por tu cumpleaños (día y mes)
$diaCumple = 18;
$mesCumple = 4;

$anioActual = date("Y");
$fechaCumple = strtotime("$anioActual-$mesCumple-$diaCumple");
$fechaHoy = strtotime(date("Y-m-d"));

// Si el cumpleaños ya pasó este año, calculamos para el próximo año
if ($fechaCumple < $fechaHoy) {
    $fechaCumple = strtotime(($anioActual + 1) . "-$mesCumple-$diaCumple");
}

$diferenciaSegundos = $fechaCumple - $fechaHoy;
$diasFaltantes = round($diferenciaSegundos / (60 * 60 * 24));

echo "\nDías faltantes para tu cumpleaños:\n $diasFaltantes días\n";

// 3 Determinar si el año actual es bisiesto
$anio = date("Y");

if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "\nEl año $anio es bisiesto \n";
} else {
    echo "\nEl año $anio no es bisiesto \n";
}

?>