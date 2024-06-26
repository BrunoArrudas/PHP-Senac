<?php
////ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR
//echo "Exemplo 1: FOR <br>";
//for ("INICIALIZAR UMA VARIAVEL - TESTAR UMA CONDIÇÃO - INCREMENTAR/DECREMENTAR" += 2){  //(Condição)

for($i = 1; $i <= 5; $i++){
    echo "Numero $i <br>";
}
echo "<br>";

// Exemplo 2 = While //////////////////////////////
echo "Exemplo 2: WHILE <br>";

$contador = 1;
while($contador <= 5){  //Enquanto for true, ele vai registrar infinitamente
    echo "Numero $contador <br>";
    $contador++;
}
echo "<br>";

//Exemplo 3: DO-WHILE /////////////////////////////
echo "Exemplo 3: DO-WHILE <br>";
$cont_do = 1;
do{
    echo "Numero: $cont_do <br> ";
    $cont_do++;
}while($cont_do <= 5);
echo "<br>";

// Exemplo 4: FOREACH /////////////////////////////
echo "Exemplo 4: FOREACH <br>";
$array_vogais = ["a","e","i","o","u"];
foreach($array_vogais as $vogal){
    echo "Vogal: $vogal <br>";
}
echo "<br>";

// Exemplo 5: BREAK e CONTINUE
echo "Exemplo 5: BREAK e CONTINUE <BR>";
for($i = 1; $i <= 10; $i++){
    if($i ==3){
        continue; //Ignora o numero e segue.
    }
    if($i == 8){
        break; //Ele parou no numero selecionado e parou o loop.
    }
    echo "Numero $i <br>";
}

?>