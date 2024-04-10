<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER','localhost',);
define('DB_USERNAME','usuario_contatos');
define('DB_PASSWORD','Senha@123');
define('DB_NAME','contatos');

//Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_NAME);

//Verificando se ocorreu algum erro de conexão
if($connection->connect_error){
    die("Erro de conexão: ". $connection->connect_error);
}

$Id = 2; //ID do registro que será excluido

//Query para excluir um contato (utilizando consulta preparada)
$meu_delete = "DELETE FROM contatos_info WHERE id = ?";

$stmt = $connection->prepare($meu_delete);


?>