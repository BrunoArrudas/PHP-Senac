<?php
class Calculadora{
     public static function somar($a, $b){
        return $a + $b;
     }

     public static function multiplicar($a, $b){
        return $a * $b;
     }
}

//$calc = new Calculadora();
//echo $calc1->multiplicar(5,5);

echo Calculadora::multiplicar(5, 5);



?>