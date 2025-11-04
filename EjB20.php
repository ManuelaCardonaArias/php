<?php
declare(strict_types=1); // Habilitar el modo estricto
//EJ #1
function validarNombre($nombre){
//Verificar que el nombre tenga al menos 3 caracteres y no tenga números
//strlen(funcion que obtiene longitud cadena de texto)
//preg_match(funcion que busca coicidencia usando expresiones regulares)
return strlen($nombre) >= 3 && !preg_match('/[0-9]/', $nombre);
}
function validarCorreo($correo){
//comprobar que el correo tiene formato valido
//filter_var(funcion que valida y filtra datos)
/* FILTER_VALIDATE_EMAIL constante en PHP que se utiliza con la función  para validar si una cadena 
tiene el formato correcto de un correo electrónico. */
return filter_var($correo, FILTER_VALIDATE_EMAIL) !== false;
}

function validarEdad($edad){
//comprobar que la edad sea un numero entero mayor a 0
//is_numeric (funcion que valida si tiene un valor numerico valido)
//intval(funcion que convierte un valor a un número entero)
return is_numeric($edad) && intval($edad) > 0;
}

//EJ #2
//Convertir de Fahrenheit a Celsius
function convertirACelsius($fahrenheit){
return  ($fahrenheit - 32) * 5 / 9;

}
//Convertir de Celsius a Fahrenheit
function convertirAfahrenheit($celsius){
 return ($celsius * 9 / 5) + 32;

}
//Mostrar resultado
function mostrarConversion($grados,$escala){
    //strtolower(funcion que convierte los caracteres en minuscula)
    if (strtolower($escala) === 'f') {
        $celsius = convertirACelsius($grados);
        //round (funcion que redondea un numero decimal)
        echo "$grados °F = " . round($celsius, 2) . " °C\n";
    } elseif (strtolower($escala) === 'c') {
        $fahrenheit = convertirAFahrenheit($grados);
        echo "$grados °C = " . round($fahrenheit, 2) . " °F\n";
    } else {
        echo "Escala no reconocida: $escala\n";
    }
}
 

//EJ #3



function verificarLogin(string $usr, string $pwr): bool {
    $usuariosValidos = [
        (object) ['usuario' => 'admin', 'password' => '1234'],
        (object) ['usuario' => 'user1', 'password' => 'abcd'],
        (object) ['usuario' => 'guest', 'password' => 'guest123']
    ];

    foreach ($usuariosValidos as $usuario) {
        if ($usuario->usuario === $usr && $usuario->password === $pwr) {
            return true;
        }
    }

    return false;
}
$resultado = verificarLogin('admi', '234');
var_dump($resultado ) ;

//EJ #4
function validarVariable($nombre)
		{
		    // Colores de terminal
		    $verde = "\033[32m";
		    $rojo = "\033[31m";
		    $reset = "\033[0m";
		
		    // Limpiar caracteres no alfanuméricos, pero preservar las letras sin tildes
		    $nombreLimpio = quitarTildes($nombre);
		
		    // Limpiar caracteres no alfanuméricos, pero preservar las letras sin tildes
	      // Ahora permitimos espacios
		    $nombreLimpio = preg_replace('/[^a-zA-Z0-9_ ]+/', '', $nombreLimpio);
		    $nombreLimpio = trim($nombreLimpio); // Eliminar espacios sobrantes
		
		    // Validar regla de PHP
		    if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $nombreLimpio)) {
		        echo "{$verde}El nombre de la variable \"$nombre\" es válido.{$reset}\n";
		    } else {
		        echo "{$rojo}El nombre de la variable \"$nombre\" NO es válido como variable PHP. Sugerencias generadas:{$reset}\n";
		    }
		
		    // Generar sugerencias de formato
		    $camelCase = convertirACamelCase($nombreLimpio);
		    $snakeCase = convertirASnakeCase($nombreLimpio);
		
		    // Detectar si ya está en camelCase
		    if (esCamelCase($nombre)) {
		        // Ya está en formato camelCase, no lo cambiamos
		        echo "Sugerencia en camelCase: $nombre\n";
		    } else {
		        echo "Sugerencia en camelCase: $camelCase\n";
		    }
		
		    echo "Sugerencia en snake_case: $snakeCase\n";
		}
		
		// Función para quitar tildes a las letras
		function quitarTildes($texto)
		{
		    $buscar = ['á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'à', 'è', 'ì', 'ò', 'ù', 'À', 'È', 'Ì', 'Ò', 'Ù', 'ä', 'ë', 'ï', 'ö', 'ü', 'Ä', 'Ë', 'Ï', 'Ö', 'Ü'];
		    $reemplazar = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
		    return str_ireplace($buscar, $reemplazar, $texto);
		}
		
		function convertirACamelCase($texto)
		{
		    $texto = preg_replace('/\s+/', ' ', $texto);
		    $texto = lcfirst(str_replace(' ', '', ucwords($texto)));
		    return $texto;
		}
		
		function convertirASnakeCase($texto)
		{
		    $snakeCase = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $texto));
		    $snakeCase = str_replace(' ', '_', $snakeCase);
		    return $snakeCase;
		}
		
		function esCamelCase($texto)
		{
		    return preg_match('/^[a-z][a-zA-Z0-9]*$/', $texto);
		}
		
		// Array con las palabras para procesar
		$palabras = ['holaMundo', 'qué tal', 'siSoy', 'yes Sir', 'Hello World'];
		
		foreach ($palabras as $nombreVariable) {
		    validarVariable($nombreVariable);
	    echo "\n"; // Separador entre resultados
	}
?>