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

// Criação dos dados para a inserção
$nome = "Beltrano";
$telefone = "999954321";
$email = "Beltrano@mail.com";

//Query para inserir um contato (utilizando uma consulta preparada)
$meu_insert = "INSERT INTO contatos_info (nome, telefone, email) VALUES (?,?,?)";
$stmt = $connection->prepare($meu_insert);

//Verifica se a consulta preparada foi bem-sucedida
if($stmt){
    //Associa os parametros à consulta preparada
    $stmt->bind_param("sss",$nome, $telefone, $email);

    //Executa a consulta
    if($stmt->execute()){
        echo "Contato inserido com sucesso.";
    }else{
        echo "Erro ao inserir o contato: ".$stmt->error;
    }

    $stmt->close();
}else{
    echo "Erro na consulta preparada: ". $connection->erro;
}

//Fecha a conexão com o banco de dados
$connection->close();