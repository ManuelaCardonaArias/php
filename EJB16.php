<?php
//EJ #1
//Declarando variable
$base="dinamica";
//Creando Varialbe dinamica
$$base="Este es el valor dinámico";
//imprimiendo valor
echo $dinamica;

echo "<hr>";
//EJ #2
//funcion crea variables dinamicas
function generarVariblesDinamicas(){
    for($i = 0; $i<5;$i++){
        $varN="var".$i;//generando variables
        $$varN="Variable dinámica # $i";//creando varibales dinamicas
    }
    echo $var1."<br>";
    echo $var2."<br>";
    echo $var3."<br>";
    echo $var4."<br>";
}
generarVariblesDinamicas();
 echo "<hr>";

 //EJ #3
 //declarando variable
 $clave="usuario";
 $$clave="Juan Pérez";
 echo $usuario;

 echo "<hr>";

 //EJ #4
 //Creando array
 $array1=["nombre"=> "Ana","edad"=>25,"pais"=>"España"];
 //Creando bucle y asignando valores del array
 foreach ($array1 as $clave =>$valor){
    //Creando variables dinamicas
    $$clave=$valor;
 }
 //imprimiendo valores del array
 echo "Nombre: ".$nombre."<br>";
  echo "Edad: ".$edad."<br>";
  echo "Pais: ".$pais."<br>";
  
  
?> 