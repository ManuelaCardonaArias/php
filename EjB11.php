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

//EJ 3
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

//EJ 4
//Declarando array asociativo
$frameworksPHP=['Laravel'=>'9.x','Symfony'=>'6.x','Codelgniter'=>'4.x'];
//EJ 5
?>