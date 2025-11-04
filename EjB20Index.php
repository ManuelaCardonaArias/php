<?php

include 'EjB20.php';
// Ejercicio #1

// Solicitar datos al usuario
echo "👤 Ingrese su nombre: ";
//trim quita espacios en balnco tabulaciones
//fgets(STDIN): Lee una línea de texto desde la consola
$nombre = trim(fgets(STDIN));

echo "📧 Ingrese su correo electrónico: ";
$correo = trim(fgets(STDIN));

echo "🎂 Ingrese su edad: ";
$edad = trim(fgets(STDIN));

// Validar y mostrar resultados
echo "\n🔍 Resultados de validación:\n";
// usando el elvis /operador ternaria
echo "Nombre: " . (validarNombre($nombre) ? "✅ Válido" : "❌ Inválido") . "\n";
echo "Correo: " . (validarCorreo($correo) ? "✅ Válido" : "❌ Inválido") . "\n";
echo "Edad: " . (validarEdad($edad) ? "✅ Válida" : "❌ Inválida") . "\n";

echo "\n\n";
//Ejercicio #2
// Solicitar datos al usuario
echo "🌡Ingrese la tempertura a convertir: ";
$grados=trim(fgets(STDIN));

echo "Ingrese La escala (F)=Fahrenheit / (C)=Celsius:";
$escala = trim(fgets(STDIN));

echo mostrarConversion($grados,$escala);
?>