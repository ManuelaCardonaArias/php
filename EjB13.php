<?php
//1.Creando diferentes variables
$v_int=3;
$v_double=8.2;
$v_booleano=true;
$v_cadena="Hola";
$v_array=["😊","😂","😘"];
$v_null=null;

//Creo un array asociativo que las contenga a todas
$allVariables=['Entero'=>$v_int,'Double'=>$v_double,'Booleano'=>$v_booleano,'Cadena'=>$v_cadena,'Array'=>$v_array,'Null'=>$v_null];
//2. Recorro las variables con un bucle
foreach ($allVariables as $nombre => $valor) {
    echo "Tipo: ".gettype($valor). "| Valor: $valor \n";
}
?>