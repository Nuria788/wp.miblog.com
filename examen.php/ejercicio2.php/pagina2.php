<?php
/* Fórmula cuadrática */
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

$cuadrado = $a**2;

echo "<br>";
echo "<h3> El area de un cuadrado de lado $a es igual a $cuadrado. </h3>";
if($b < $c){
    echo "El número $b es menor que $c ";

 }else{
     echo "El número $b es mayor que $c ";
 }


?>