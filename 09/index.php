<?php

function nomeDaFuncao(){
    //Bloco de codigo da função.
}

//Declaração de função sem parametros e sem retorno.
function saudacao(){
    echo "Olá, TII04! <br>";
}

saudacao();//Chamada da função.

//Declaração de uma função que retorna um valor.
function saudacao_retorno(){
    return "Olá, TII04! <br>";
}

echo saudacao_retorno(); //Chamada de função com retorno.

//Declaração de uma função que recebe parametro.
function saudacao_parametro($nome){
    echo "Olá, $nome& <br>";
}

saudacao_parametro("TII04") ;//Atribuindo valor ao parametro.

//Declaração de uma função que recebe parametro e retorna algo
function atividade($retorno){
    return "A velocidade maxima de um onibus é $retorno kilometros por hora <br>";
    
}
$retorno = "180";
echo atividade($retorno); //("180") Outra forma de atribuir valor.

//Declaração de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b){
    return $a + $b;
}
$resultado = soma(8, 16);
echo "A soma de 8 com 16 é: $resultado <br>";

# ESCOPO DAS VARIAVEIS!!!

$mensagem = "Olá"; //Variavel global
function mostrarMensagem(){
     $mensagem = "Mundo"; //Variavel local - A função so sera visualizada dentro da função;
     echo $mensagem; //Saida: Mundo
}

mostrarMensagem();
echo $mensagem; // Saida: Olá
?>