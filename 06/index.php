<?php
//// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

// Verificação de tipo de dados
$numero = 10;
$string = "Olá, Mundo!";
$booleano = true;
$array = [1, 2, 3];

echo 'Tipo de dado da variavel $numero: '.gettype($numero). "<br>"; //Aspas simples não concatenam.
echo 'Tipo de dado da variavel $string: '.gettype($string). "<br>";
echo 'Tipo de dado da variavel $booleano: '.gettype($booleano). "<br>";
echo 'Tipo de dado da variavel $array: '. gettype($array). "<br>";

// Verificação de Tipo de Dados com Funções
echo 'Verificação se $numero é do tipo int : ' . (is_int($numero)? "Sim" : "Não") . "<br>";
echo 'Verificação se $string é do tipo string: ' . (is_string($string)? "Sim" : "Não") . "<br>";
echo 'Verificação se $booleano é do tipo boolean: ' . (is_bool($booleano)? "Sim" : "Não") . "<br>";
echo 'Verificação se $array é do tipo array: ' . (is_array($array)? "Sim" : "Não") . "<br>";

// Conversão de tipos de dados
$numero_string = "456";
$numero_convertido = (int)$numero_string;

echo "Numero convertido de string para int: $numero_convertido <br>";

// Demais conversões:
$numero = 456;
$string_numero = (string)$numero;
echo "Numero de int para string: $numero <br>";

$bool_string = "true";
$bool_convertido = (bool)$bool_string;

//
$array_string = "1,2,3";
$array_convertido = explode(",",$array_string); //Ele sempre transforma os valores selecionados em Array.

echo "Numeros em uma string antes da conversão:  $array_string <br>";
echo "Array convertido de string para array: ";
print_r($array_convertido);
echo "<br>";

# Exemplo adicional conversão para array
$hora = "20:02:59"; //Hora lida de um log
$array_hora_minuto = explode(":",$hora);
echo "Evento ocorreu as $array_hora_minuto[0] horas e $array_hora_minuto[1] minutos. <br>";
echo "Evento ocorreu as $array_hora_minuto[0] horas e $array_hora_minuto[1] minutos e $array_hora_minuto[2] segundos. <br>";

# Exemplo adicional 2
$contatos = "Aecio-Nerildo-JS-Celso-Luana";
echo "A lista de contatos é: $contatos <br>";

$contatos_array = explode("-", $contatos);
print_r($contatos_array);

// Palavras Reservadas e Funções comuns
echo "Exemplo de uso da função strtoupper para converter uma string em maiúsculas: " . strtoupper($contatos) . "<br>";







?>