<?php

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

//----------------------------------------------------------

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 10;
$B = 30;
$C = 50;

// Implementação da Verificação de Soma
if(($A + $B) == $C){
    echo 'A soma de "A" + "B" é igual: "C"';
} else {
    echo 'A soma de "A" + "B" não é igual "C"';
} 

//----------------------------------------------------------

// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$valor_quadrado = 14;

// Implementação do Cálculo do Quadrado
$var_resulquad = $valor_quadrado * $valor_quadrado;
echo "<br> Resultado: $var_resulquad <br>";

//----------------------------------------------------------

// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 13;

// Implementação da Verificação de Paridade
if($numero % 2 == 0){
    echo "";
}

//----------------------------------------------------------

// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$one = 400;
$two = 400;
$tre = 350;

// Implementação do Cálculo da Média
$var_media = ($one + $two + $tre) / 3;
echo "$var_media <br>";

//----------------------------------------------------------

// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo
if($numeroMultiplo % $multiploDe == 0){
    echo "$numeroMultiplo é multiplo de $multiploDe";
} else {
    echo "$numeroMultiplo não é multiplo de $multiploDe";
};

//----------------------------------------------------------


//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/
$numeroN = 1;
$numeroM = 25;

// Implementação de Números Primos em um Intervalo
function ehPrimo($numero){
if($numero <= 1){
   return false;
}
for ($i = 2; $i <= sqrt(); $i++){
    if($numero % $i ==0){
        echo "Não é Primo";
    }
    echo "É primo!";
}
}
//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/

// Implementação de Conversão de Horas em Minutos

/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide

//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;

// Implementação de Contagem de Dígitos em um Número
echo "O numero de digitos em $numeroDigitos é: ". strlen($numeroDigitos)."<br>";

//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";
$palavraInvertida = strrev($palavra);

// Implementação de Verificação de Palíndromo
if($palavra == $palavraInvertida){
    echo "A palavra $palavra é um palindromo. <br>";
} else {
    echo "A palavra $palavra não é um palindromo. <br>";
}

//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/


// Implementação de Ordenação de Números





//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/

// Implementação de Soma de Dígitos




//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica

?>