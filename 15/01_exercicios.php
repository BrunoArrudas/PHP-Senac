<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','usuario_lista_compras');
define('DB_PASSWORD','Senha@123');
define('DB_NAME','lista_compras');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$ExibirDados = "SELECT * FROM itens_compra";

$resultadoPesquisa = $connection->query($ExibirDados);

while($row = $resultadoPesquisa->fetch_assoc()){
     echo "Nome: ". $row['nome_produto']."<br>";
     echo "Quantidade: ". $row['quantidade']."<br>";
     echo "<hr>";
}

$nomeProduto = "Pão de Queijo";
$quantidade = 3;

$nomeProduto1 = "Pipoca";
$quantidade1 = 1;

$nomeProduto2 = "Farinha";
$quantidade2 = 5;

$InserindoDados = "INSERT INTO lista_compras (nome_produto,quantidade) VALUES (?,?)";
$statement = $connection->prepare($InserindoDados);

if($statement){

    $statement->bind_param("sisisi",$nomeProduto,$quantidade, $nomeProduto1,$quantidade1,$nomeProduto2,$quantidade2);

    if($statement->execute()){
        echo "Contato inserido com sucesso.";
    }else{
        echo "Erro ao inserir o contato: ".$statement->error;
    }

    $statement->close();
}else{
    echo "Erro na consulta preparada: ". $connection->error;
}






?>