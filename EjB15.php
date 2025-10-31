<?php
//EJ #1
$nombre="Manuela";

function saludarGlobal(){
    global $nombre;
    echo "".$nombre."";//no funciona porque no esta accedinedo a a variable global;
}
 saludarGlobal();
echo "<hr>";
 //EJ #2
 function multiplicarPorDos($num1){
    $resultado=$num1*2;
    echo "El resultado es: ".$resultado;
 }
 echo $resultado; //causa error porque la variable no es global, es local
 multiplicarPorDos(5,5);

 echo "<hr>";
 //EJ #3
 function contadorEstatico(){
    //variable estatica
    static $contar=0;
    $contar++;
    echo "Llamada: ".$contar."<br>";
 }
 contadorEstatico();
 contadorEstatico();
 contadorEstatico();
 contadorEstatico();
echo "<hr>";
 //EJ #4
 function compararContadores(){
    //declaración de variable local
    $contadorLocal=0;
    echo "Variable local: ".$contadorLocal."<br>";
    //declaración variable estatica
    $contadorEstatico=0;
    echo "Variable estatica: ".$contadorEstatico."<br>";
 }

 compararContadores();
 compararContadores();
 compararContadores();
 compararContadores();
 compararContadores();

?>