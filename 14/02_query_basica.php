<?php
//define = const = Constante em PHP não possui cifrão.

define('DB_SERVER','localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD','senha123');
define('DB_NAME','contatos');

// Conecta a aplicação ao banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Query para selecionar os contatos
$consulta = "SELECT * FROM contatos_info";

//Executa a query e armazena o resultado em uma variavel
$result = $connection->query($consulta);

//Exibe os resultados em tela
print_r($result);


// Fecha a conexão
$connection->close();

?>