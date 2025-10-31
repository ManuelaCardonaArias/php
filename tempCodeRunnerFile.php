<?php
$var="56.78";
echo "$var - ".gettype($var)."<br>";
//Convertir a diferentes tipos
//Usando settype();
//1. Entero
settype($var,"integer");
echo "$val".gettype($val);