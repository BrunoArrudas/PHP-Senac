<?php

require_once 'DatabaseRepository.php';

class ContaRepository {

    public static function getAllContas() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta");

        $contas = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $contas[] = $row;
            }
        }
        $connection->close();
        return $contas;
    }

    public static function getContaById($id){
        $connection = DatabaseRepository::connect();
        $sql = "SELECT * FROM conta WHERE id = $id";
        $result = $connection->query($sql);

        $conta = null;
        if($result->num_rows > 0){
            $conta = $result->fetch_assoc();
        }
    $connection->close();
    return $conta;
    }

    public static function insertConta($nome, $cpf){
        $connection = DatabaseRepository::connect();
        $sql = "INSERT INTO conta (nome,cpf) VALUES ('$nome','$cpf'";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function updateConta($id, $nome, $cpf){
        $connection = DatabaseRepository::connect();
        $sql = "UPDATE conta SET nome = '$nome', cpf = '$cpf' WHERE id = $id";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function deleteConta($id){
        $connection = DatabaseRepository::connect();
        $success = $connection->query("DELETE FROM conta WHERE id= $id");
        $connection->close();
        return $success;
    }
}

?>