<?php

require_once 'database/PedidoRepository.php';

class PedidoController {
    public static function handleRequest($action){
        switch($action){
            case 'listar':
                //Fazer algo
                self::listarPedidos();
                break;
            default:
            http_response_code(400); //Requisição Invalida
            echo json_encode(['error' => 'Ação invalida']);
            break;
        }
    }

    public static function listarPedidos(){
        $pedidos = PedidoRepository::getAllPedidos();
        echo json_encode($pedidos);

    } 
}




?>