<?php
//EJ #1
//1.Creando diferentes variables
$v_int=3;
$v_double=8.2;
$v_booleano=true;
$v_cadena="Hola";
$v_array=["😊","😂","😘"];
$v_null=null;

// Coloco todas las variables en un array para recorrerlas
$allsVariables = array(
    "entero" => $v_int,
    "decimal" => $v_double,
    "booleano" => $v_booleano,
    "cadena" => $v_cadena,
    "arreglo" => $v_array,
    "nulo" => $v_null
);
// 2. Recorro las variables con un bucle
foreach ($allsVariables as $nombre => $valor) {
    echo "Tipo: " . gettype($valor) . " | Valor:  ";

    // Verifico usando el if el tipo de dato antes de imprimir
    //convierto el array en string con print_r 
    //para que se pueda ver su contenido
    if (is_array($valor)) {
        echo print_r($valor,true);
         //en php el booleano se imprimecomo true=1 y false= nada
        //por ello uso el operador ternario par poder ver si la
        //condicion es falsa o verdadera 
    } elseif (is_bool($valor)) {
        echo $valor ? 'true' : 'false';//usando el elvis
        //para que el valor null no se muestre vacio
        //lo verifico y le paso el null para que sea visto
    } elseif (is_null($valor)) {
        echo 'null';
    } else {
        //esto aplica para las otras variables
        echo $valor;
    }

    echo "<br>"; // salto de línea en html
    echo "<br>"; // salto de línea en html
    echo "<br>"; // salto de línea en html
    echo "<br>"; // salto de línea en html
}
echo "<hr>";
//EJ #2
//Defino un array con los siguientes valores
		$valores = [42, "PHP", 3.14, true, null, [1, 2, 3]];
        foreach($valores as $val){
            //hago un condicional comprobando si el valor es escalar
            if( is_scalar($val)){
                echo "El valor ";
                //muestro el valor 
                if (is_string($val)){
                    echo "'$val'";
                }elseif (is_bool($val)){
                    echo $val ? "true":"false";
                }else{
                    echo $val;
                }
                echo " es de tipo escalar: ".gettype($val)."<br>";
            }else {
                echo "El valor ";
                if (is_null($val)){
                    echo "NULL no es de tipo escalar (es un NULL). <br>";
                }elseif(is_array($val)){
                echo "array ".print_r($valor,true)."no es de tipo escalar (es un array).<br>";
                }else{
                    echo "de tipo ".gettype($val)." no es escalar.<br>";
                }
            }
        }

        echo "<hr>";

//EJ #3

		function calculadora($num1, $num2, $operacion) {
		    // Verificar si ambos números son escalares
		    if (!is_scalar($num1) || !is_scalar($num2)) {
		        return "Error: Ambos parámetros deben ser escalares.";
		    }
		
		    // Definir las operaciones como funciones callables
		    $operaciones = [
		        "suma" => function($a, $b) { return $a + $b . "<br>"; },
		        "resta" => function($a, $b) { return $a - $b . "<br>"; },
		        "multiplicacion" => function($a, $b) { return $a * $b . "<br>"; },
		        "division" => function($a, $b) { 
		            if ($b == 0) {
		                return "Error: No se puede dividir entre cero.<br>";
		            }
		            return $a / $b . "<br>"; 
		        }
		    ];
		
		    // Verificar si la operación es válida
		    if (!isset($operaciones[$operacion])) {
		        return "Error: Operación no válida.";
		    }
		
		    // Ejecutar la operación usando el callable
		    return $operaciones[$operacion]($num1, $num2);
		}
		
		// Ejemplos de uso
		echo calculadora(10, 5, "suma"); // Resultado: 15
		echo calculadora(10, 5, "division"); // Resultado: 2
		// Resultado: Error: No se puede dividir entre cero.
		echo calculadora(10, 0, "division"); 
		// Resultado: Error: Ambos parámetros deben ser escalares.
		echo calculadora(10, "5", "suma"); 

echo "<hr>";
//EJ #4
		// Definir el array asociativo
		$informacion_personal = [
		"nombre" => "Manuela",
		"edad" => 29,
		"ubicacion" => "Reus",
		"profesion" => "Desarrollador Junior",
		"intereses" => ["pintar", "viajar", "aprender nuevas tecnologias"]
		];
		
		// Muestra el contenido completo del array
		echo "<pre>";
		print_r($informacion_personal);
		echo "</pre>";
		
		// Acceder y mostrar solo el nombre y la edad
		echo "Nombre: " . $informacion_personal['nombre'] . "<br>";
		echo "Edad: " . $informacion_personal['edad'] . "<br>";
		
		// Cambiar la ubicación
		$informacion_personal['ubicacion'] = "Tarragona";
		echo "Ubicación actualizada: " . $informacion_personal['ubicacion'] . "<br>";
		
		// Mostrar el array actualizado con la nueva ubicación
		echo "<pre>";
		print_r($informacion_personal);
		echo "</pre>";
		
		// Agregar un nuevo interés
		$informacion_personal['intereses'][] = "gatos";
		echo "Intereses: <br>";
		foreach ($informacion_personal['intereses'] as $interes) {
		echo "- " . $interes . "<br>";
		}
		
		// Verificar si la clave 'edad' existe en el array
		if (isset($informacion_personal['edad'])) {
			echo "La clave 'edad' existe en el array.<br>";
		} else {
			echo "La clave 'edad' no existe en el array.<br>";
		}
echo "<hr>";

//EJ #5

    // Abrir el archivo en modo lectura
    $archivo = @fopen("file.txt", "r"); // Devuelve un recurso

    // Mostrar el recurso
    var_dump($archivo); // Muestra algo como: resource(5) of type (stream)

    // Verificar si el archivo se ha abierto correctamente
    if ($archivo) {
        // Leer todo el contenido del archivo
        $content = fread($archivo, filesize("file.txt"));

        // Mostrar el contenido del archivo
        echo $content;

        // Cerrar el archivo
        fclose($archivo); // Liberar el recurso
    } else {
        echo "No se pudo abrir el archivo.";
    }


?>
