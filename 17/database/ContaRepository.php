<?php
require_once 'DatabaseRepository.php';

class Conta {
    public static function getAllContas(){
        $connection = DatabaseRepository::connect();
        $resultadoConta = $connection->query("SELECT * FROM conta");
         
        $contas = [];

        if($resultadoConta->num_rows > 0){
            while($row = $resultadoConta->fetch_assoc()){
                $contas[] = $row;
            }
        }
        $connection->close();
        return $contas;

    }
}






?>