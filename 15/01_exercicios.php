<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','usuario_lista_compras');
define('DB_PASSWORD','Senha@123');
define('DB_NAME','lista_compras');

//Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Consultando os dados da tabela
$ExibirDados = "SELECT * FROM itens_compra";






?>