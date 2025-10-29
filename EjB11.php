<?php
//Declaración de variables
$creador="Brendan Eich";
$lenguaje="Javascript";
//EJ 1
//Usando Interpolación de variables
echo "El creador de $lenguaje es $creador (Interpolacón)\n";

//Usando concatenación de variables
echo "El creador de ".$lenguaje. " es ".$creador." (Concatenación)\n";

//Modificando valores de las variables
$creador="Rasmus Lerdorf";
$lenguaje="PHP";
//Usando Interpolación de variables
echo "El creador de $lenguaje es $creador (Interpolacón)\n";

//Usando concatenación de variables
echo "El creador de ".$lenguaje. " es ".$creador." (Concatenación)";

//EJ 2
//Aculando datos en la variable
$tecnologias = "\nHTML ";
echo $tecnologias;

$tecnologias .= "CSS ";
echo $tecnologias;

$tecnologias .= "JavaScript ";
echo $tecnologias;

$tecnologias .= "TypeScript ";
echo $tecnologias;

$tecnologias .= "PHP";
echo $tecnologias;

//EJ 3
//Declarando array asociativo
$frameworksPHP=['Laravel'=>'9.x','Symfony'=>'6.x','Codelgniter'=>'4.x'];

// Usando Interpolación con {}
echo "El framework Laravel tiene la version {$frameworksPHP['Laravel']} \n";
// mostrando otros frameworks
echo "El framework Symfony tiene la version {$frameworksPHP['Symfony']} \n";

echo "El framework Coldelgniter tiene la version {$frameworksPHP['Codelgniter']} \n";

//modificando el array para añadir un nuevo framework
$frameworksPHP["Zend Framework"] = "3.x";
 //mostrando ultimo framework
 echo "El último framework añadido es Zend Framework tiene la version {$frameworksPHP['Zend Framework']} ";


//EJ 4
//1.Escapar es poner \ cuando las comillas son iguales
echo "PHP significa \"Hypertext Preprocessor\". \n";
//2.
echo "Mi página principal es 'Personal Page Home'. \n";
//3.
echo  'PHP significa \'Hypertext Preprocessor\'. ';
//4
echo "\nMi página principal es 'Personal Page Home'.";
?>