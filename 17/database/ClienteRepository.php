<?php
require_once 'DatabaseRepository.php';

class ClienteRepository {
    
    public static function getAllClientes() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM cliente");
        
        $cliente = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $cliente[] = $row;
            }
        }

        $connection->close();
        return $cliente;
    }

    public static function getClienteById($id){
        $connection = DatabaseRepository::connect();
        $sql = "SELECT * FROM cliente WHERE id = $id";
        $result = $connection->query($sql);
    }
}
?>

