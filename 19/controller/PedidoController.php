<?php

require_once 'database/PedidoRepository.php';

class PedidoController {
    public static function handleRequest($action){
        switch($action){
            case 'listar':
                //Fazer algo
                self::listarPedidos();
                break;

            case 'buscar':
                self::buscarPedidoPorId();
                break;

            case 'cadastrar':
                self::cadastrarPedido();
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

    public static function buscarPedidoPorId(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        $pedido = json_encode(PedidoRepository::getPedidoById($id));
        
        if($pedido) {

        } else {
            http_response_code(404);
            echo json_encode(['error' => "Pedido não encontrado!"]);
        }
    } else {
        http_response_code(405);
        echo json_encode(['método não permitido' => 'Essa requisição só aceita GET']);
    }
}

    public static function cadastrarPedido(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = json_decode(file_get_contents("php://input"));
            $data_pedido = $data->data_pedido;
            $status = $data->status;

            $success = PedidoRepository::insertPedido(new Pedido(null, $data_pedido, $status));
            echo json_encode(['success' => $success]);

        } else {
            http_response_code(405);
        }

    }
}
?>