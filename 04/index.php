<?php
//// FLOATS E BOOLEANOS

// Numeros Decimais (Floats)
$altura = 1.75;
$peso = 75.4;

echo "Altura: $altura metros - Peso: $peso quilogramas <br>";

// Operaçoes com Floats
$preco_produto = 19.99;
$quantidade = 3;

$total = $preco_produto * $quantidade;
echo "Total da compra de $quantidade itens do produto que custa $preco_produto: Valor total: $total reais. <br>";

// Booleans
$tem_idade = true;
$tem_cartao = false;
$pode_entrar = $tem_idade && $tem_cartao; //Operador logico AND
echo "Pode entrar na festa: ".($pode_entrar ? "Sim <br>" : "Não <br>");
#

$tem_passaporte = true;
$tem_visto = false;
$pode_viajar = $tem_passaporte || $tem_visto; //Operador Logico OR
echo "Pode viajar para o exterior: ".($pode_viajar ? "Sim, pode viajar. <br>":"Não pode viajar. <br>");
#

$sem_carteira_motorista = true;
$pode_dirigir = !$sem_carteira_motorista; //Negação logica( NOT !) - Inverter resultado.
echo "Pode dirigir: ".($pode_dirigir ? "Sim <br>" : "Não <br>");
#

$resultado_booleano = 5 > 7;
echo "5 é maior do que 7? :" . ($resultado_booleano ? "Sim <br>":"Não <br>");

$resultado_booleano = 7 > 5;

if($resultado_booleano) {
    echo "Resultado variavel <br>";
}
if(7 > 5){
    echo "Resultado por comparação logica <br>";
}
if(true){
    echo "Resultado HARD CODED";
}
?>