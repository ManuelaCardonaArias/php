<?php
//EJ #1
	$values = [
		    "123abc",
		    "42.99",
		    true,
		    false,
		    null,
		    "abc123",
		    [1, 2, 3]
		];

        //Convertir en Int
        foreach( $values as $val){
if(is_array($val)){
echo "'Array': NO se puede convertir un array a entero. Habria que recorrelo.";
}else{
          echo "(int): '$val'".":".(int)$val;
            echo "<br>";
}
        };
echo "<hr>";
//EJ #2
$var="56.78";
//Convertir a diferentes tipos
//Usando settype();
//1. Entero
settype($var,"integer");
echo "Valor como integer: ".$var."<br>";
//2. Flotante
settype($var,"float");
echo "Valor como float: ".$var."<br>";
//3. Cadena
settype($var,"string");
echo "Valor como string: ".$var."<br>";
//4.Booleano
settype($var,"boolean");
echo "Valor como boolean: ".$var."<br>";

echo "<hr>";
//EJ #3
class Mynumber{
    private float $value;
    public function __construct(float $value){
        $this->value=$value;
    }
    public function intValue(): int {
return (int) $this->value;
    }
}
 $number = new Mynumber(42.75);
 echo "El valor entero es: ".$number->intValue()."<br>";
?>