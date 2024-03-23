<?php
//// NUMEROS E OPERADORES

// Operações Basicas
$num1 = 10;
$num2 = 5;

// Soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

// Subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

// Multiplicação
$multiplicacao = $num1 * $num2;
echo "multiplicacao: $multiplicacao <br>";

// Divisão
$divisao = $num1 / $num2;
echo "divisão: $divisao <br>";

// Modulo (Resto da Divisão)
$modulo = $num1 % $num2;
echo "Modulo: $modulo <br>";

// Operações de incremento e decremento
$num = 5;
$num_mais = 5;
echo "Valor base para incremento e decremento = $num <br>";

// Incremento
$num = $num + 1;
echo "Valor incrementado $num <br>";
$num_mais ++;
echo "Valor incrementado (++) $num_mais <br>";

// Decremento
$num--;
echo "Decremento: $num <br>"; //Esse valor mudou a variavel acima.

// Operadores de Comparação
$num1 = 10;
$num2 = 5;

// Igualdade
echo "Igual a: ";
echo $num1 == $num2 ? "Verdadeiro <br>" : "Falso <br>"; //Essa operação ocorre identica a IF ELSE.

// Diferente
echo "Diferente de: ";
echo $num1 != $num2? "Verdadeiro <br>" : "Falso <br>";

// Maior que
echo "Maior que: ";
echo $num1 > $num2? "Verdadeiro <br>" : "Falso <br>";

// Menor que 
echo "Menor que: ";
echo $num1 < $num2? "Verdadeiro <br>" : "Falso <br>";

//// Operadores Logicos
$estaChovendo = false;
$estaCalor = true;

// E lógico (AND)
echo "Verdadeiro e Verdadeiro: ";
echo true && true ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Verdadeiro e Falso: ";
echo true && false ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Falso e Verdadeiro: ";
echo false && true ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Falso e Falso: ";
echo false && false ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Verdadeiro e Falso: ";
echo $estaChovendo && $estaCalor ? "Verdadeiro <br>" : "Falso <br>"; //Outro modo da tabela verdade.

// OU logico (OR)

echo "Verdadeiro e Verdadeiro: ";
echo true || true ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Verdadeiro e Falso: ";
echo true || false ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Falso e Verdadeiro: ";
echo false || true ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Falso e Falso: ";
echo false || false ? "Verdadeiro <br>" : "Falso <br>";
//
echo "Esta chovendo e esta calor: ";
echo $estaChovendo || $estaCalor ?  "Verdadeiro <br>" : "Falso <br>";

//Não logico (NOT)
echo "Negando algo que é verdadeiro: ";
echo !true ? "Verdadeiro <br>" : "Falso <br>";




// IF ($num1 == $num2){
//    echo "Verdadeiro";
// } else {
//    echo "Falso";
// }
?>
