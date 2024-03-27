<?php

    //Exercício 1 - Acesso a Elementos:
    //Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
    $diasemana = array("Segunda","Terça","Quarta","Quinta","Sexta","Sabado","Domingo");
    echo "O terceiro dia da semana é: ". $diasemana[2] . "<br>";

    //Exercício 2 - Alteração de Elementos:
    //Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".
    $mesano = [1,2,3,4,5,6,7,8,9,10,11,12];
    $mesano[12] = "Dezembro";
    echo "Nome do ultimo mes do ano: " . $mesano[12] . "<br>";

    //Exercício 3 - Adição de Elementos:
    //Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.
    $vazio = [];
    $vazio = [1,2,3,4,5];
    $vazio[] = 6;
    print_r($vazio)."<br>";

    //Exercício 4 - Percorrendo um Array:
    //Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.
    $nomesano = ["<br> Janeiro","Fevereiro","Março"];
    foreach($nomesano as $todosmesanos){
        echo "<br>". ($todosmesanos). "<br>";
    }

    //Exercício 5 - Contagem de Elementos:
    //Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.
    $contdiasemana = ["Segunda","Terça","Quarta","Quinta","Sexta","Sabado","Domingo"];
    echo "Quantidade elementos Array: ". count($contdiasemana). "<br>";

    //Exercício 6 - Busca de Elemento:
    //Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
    $quantdiasemana = ["Segunda","Terça","Quarta","Quinta","Sexta","Sabado","Domingo"];
    echo "Essa é a localização do sabado: ". array_search("Sabado",$quantdiasemana). "<br>";


    //Exercício 7 - Reversão de Array:
    //Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.
    $numero = [1,2,3,4,5,6,7,8,9,10];
    $revert_numero = array_reverse($numero);
    print_r($revert_numero);
?>