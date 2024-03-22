<?php
    //// STRINGS

    //// Para unir duas ou mais strings em PHP, usamos o operador de concatenação.
    $nome = "Bruno";
    $sobrenome = "Arruda";
    
    echo $nome.$sobrenome; //Saida: BrunoArruda.
    echo $nome." ".$sobrenome; //Saida: Bruno Arruda.
    echo "<br>";

    //Para obter o comprimento de uma string em PHP, usamos a função strlen().
    $texto = "Olá, Mundo!";
    echo strlen($texto); //Saida: 12 Caracteres - O acento conta como uma string.
    echo "<br>";

    //Para substituir partes de uma string, usamos a função str_replace()
    $texto = "O rato roeu a roupa do rei";
    $novo_texto =str_replace("rato","gato", $texto); // ("trecho que desejo substituir","trecho que desejo adicionar", variavel que desejo aplicar a mudança.)
    echo $novo_texto; //Saida: o gato roeu a roupa do rei.
    echo "<br>";

    //strtolower(): Converte uma string para letras minusculas
    //strtoupper(): Converte uma string para letras maiusculas
    $texto = "Olá, Mundo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);
     
    echo $texto_minusculo;
    echo "<br>";
    echo $texto_maiusculo;
    echo "<br>";
    echo $texto;
    echo "<br>";

    //trim(): Remove espaços em branco no inicio e no final de uma string.
    $texto = "Olá, Mundo!";
    $texto_sem_espaços = trim($texto);
    echo $texto_sem_espaços;
    echo "<br>";

    //strpos(): Encontra a posição da primeira ocorrencia de uma substring em uma string 
    $texto = "O rato roeu a roupa do rei";
    $posicao = strpos($texto, "rato"); // Saida: 2 (posição da primeira letra da palavra "rato")
    echo $posicao;
    echo "<br>";

    //strrev(): Inverte uma string
    $texto = "Socorram-me subi no onibus em Marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido; //socorraM me subino on ibus em-marrocoS 

?> 