<?php

function teste(){
    $a = 0;
    $a++;
    echo "$a <br>";
}

teste();

echo "Teste estatico <br>";

function testeStatc(){
    static $a = 0;
    $a ++;//+=50             //Na função Static ela vai incrementando.

    echo "$a <br>";
}

testeStatc();
testeStatc();


?>