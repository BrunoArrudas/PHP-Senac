<?php

echo "Hello World! <br>";


//Isso é um comentario
# Isso também é um comentario

/*
Isso é um comentario de multiplas linhas
Eu disse, multiplas linhas.
*/

//Declarando variaveis   20/03/2024
$nome = "João";
$sobrenome = "Silva";
$nome_completo = $nome. " " . $sobrenome; //Uma variavel pode receber os valores de outras variaveis.

//echo $nome;
//echo $sobrenome;
echo $nome ." ".$sobrenome ."<br>"; //O ponto "." existe para concatenar as informações.
echo $nome_completo;

//Variaveis numericas
$idade = 25;
$ano = 2024;

echo $idade;
echo $ano - $idade; //Operações matematicas se assemelham a Javascript

// Trabalhando com aspas simples e duplas.
echo 'Esse é um texto em aspas simples <br>';
echo "Esse é um texto em aspas duplas";
echo 'Dom Pedro disse: "Indepedencia ou Morte!"';

// Interpolação - Aspas Duplas
echo "$nome tem $idade anos de idade";

?>

