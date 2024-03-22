<?php

    //Exercício 1 - Concatenação de Strings:
    //Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".

    $nome_pessoa = "Pamela";
    $profissão_pessoa = "Apresentadora";
    echo $nome_pessoa. " é " .$profissão_pessoa;
    echo "<br>";

    //Exercício 2 - Comprimento de uma String:
    //Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

    $senha = "senha123";

    if(strlen($senha) >= 8){
        echo"Senha valida";
    }else{
        echo "Senha deve ter pelo menos 8 caracteres";
    }
    echo "<br>";

    //Exercício 3 - Substituição de Caracteres:
    //Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.

    $var_frase = "O cachorro correu atras do motoqueiro";
    $alter_frase = str_replace("cachorro","gato",$var_frase);
    echo $alter_frase;
    echo "<br>";

    //Exercício 4 - Conversão de Case:
    //Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.
    
    $var_palavra = "Biologia";
    $palavra_minuscula = strtolower($var_palavra);
    $palavra_maiuscula = strtoupper($var_palavra);
    echo $palavra_minuscula;
    echo $palavra_maiuscula;
    echo "<br>";

    //Exercício 5 - Remoção de Espaços em Branco:
    //Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

    $var_URL = "   https://www.google.com/";
    $var_notesp = trim($var_URL); 
    echo $var_URL;
    echo "<br>";

    //Exercício 6 - Posição da Primeira Ocorrência:
    //Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

    $var_listacompras = "Arroz, Feijão, Carne, Leite, Suco, Cafe";
    $var_poslei = strpos($var_listacompras, "Leite");
    echo $var_poslei;
    echo "<br>";

    //Exercício 7 - Inversão de uma String:
    //Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
    
    $var_revpalavra = "Montanha";
    $var_invertida = strrev($var_revpalavra);
    echo $var_invertida;
  




?>