<?php
//EJ #1
//función anónima
$sumar = function($num1,$num2){
    return $num1 + $num2;
};
echo $sumar(5,3);

echo "\n";
//EJ #2
 $numeros = [1, 2, 3, 4, 5];
//usando array map
$numDiv= array_map(function($n){
    return $n%2==0 ? "✔ $n es divisible por 2" : "❌ $n no es divisible por 2";//numero divisible por 2
},$numeros);
print_r($numDiv);

echo "\n";
//EJ #3
$descuento=0.2;
$precioFinal=function ($p) use ($descuento){
    
    return "El precio Final es: ".$p-$descuento;
    
};
echo $precioFinal(10)."\n";

//EJ #4
$aplicarOperacion=function ($num,$callback){
return $callback($num);
};

$resultado =$aplicarOperacion(5,function($n){
    return $n*$n;
});
echo "El cuadrado es: $resultado \n";
//EJ #5
// Declarando Variable global
$contador = 10;

// Modificar variable global
function incrementarContador() {
    global $contador; // Importa la variable global al ámbito local
    $contador += 5;   // La modifica directamente
    echo "Dentro de la función con global: $contador\n";
}

incrementarContador(); // Llama a la función
echo "Después de usar global: $contador\n"; // La variable global cambió

//Variable externa
$mensaje = "Hola";

// Usando variable con use
$saludar = function() use ($mensaje) {
    // Solo se usa una copia de la variable, no se modifica la original
    echo "Dentro de la función anónima: $mensaje\n";
};

$saludar();
echo "Después de usar use: $mensaje\n"; // La variable original no cambia
?>