<?php
//// INTRODUÇÃO A ARRAYS EM PHP

// Definição de Arrays
$frutas = array("Maça","Banana","Laranja","Morango");// Inicializando com valores.
$numeros = [1,2,3,4,5];
$numeros2 = [1,2,3,4,5,"5"];// Array misto.
$alunos = array("João" =>18, "Maria" => 20, "Pedro" =>19);// Array indexado.

// Acessando Elementos do Array
echo "A segunda fruta é: ". $frutas[1] . "<br>";// Acessando o valor no array.
echo "O terceiro numero é: ". $numeros[2] . "<br>";
echo "A idade de João é: ". $alunos["João"] . "<br>";

// Alterar Elementos do Array
$frutas[0] = "Pera"; // Alterando valores em Arrays
$numeros[4] = 10;
$alunos ["Maria"] = 21;

// Adicionando Elementos ao Array
$frutas[] = "Abacaxi"; // FIFO e LIFO (First in, First Out)(Last in, First Out)
$numeros[] = 6;
$alunos["Ana"] = 22;

//Percorrendo um Array com o foreach
echo "Lista de Frutas: " ;
foreach ($frutas as $fruta){ //Estancio uma nova variavel somente dentro desse foreach. Ele somente pega 01 elemento por vez.
    echo $fruta . "<br>"; //Nova variavel com os dados do array.
}


echo "Lista de Numeros: ";
foreach($numeros as $cadanumero){
    echo $cadanumero;
}
echo "<br>";

echo "Lista de alunos: ";
foreach($alunos as $nome => $idade){ //Chave e valor. //FOREACH é otimo para percorrer listas
    echo $nome . " tem " . $idade . " anos. ";
}

// Funções uteis para Arrays
echo "<br> Numeros de elementos no array de frutas: ". count($frutas) . "<br>"; // Count sendo utilizado para contar elementos em PHP.

echo "Indice da fruta 'Laranja' no array: " . array_search("Laranja",$frutas) . "<br>"; //Procurando valores.

echo "Ultima fruta do array: " . end($frutas) . "<br>"; //Ultima fruta da lista

echo "Array de frutas antes de reverter: ";
print_r($frutas); //Exibe em tela os valores do array
echo "<br>";

$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);

?>