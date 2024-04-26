<?php
require_once 'database/PedidoRepository.php';
require_once 'database/ProdutoRepository.php';

$entity = $_GET['entity'];
$action = $_GET['action'];

switch($entity){
    case 'pedido':
        require_once 'controller/PedidoController.php';
        PedidoController::handleRequest($action);
        break;
    default:
    http_response_code(400);
    echo json_encode(['error'=>'Entidade invalida!']);
    break;

    case 'produto':
        require_once 'controller/ProdutoController.php';
        ProdutoController::handleRequest($action);
        break;
    default:
        http_response_code(400);
        echo json_encode(['error'=>'Entidade invalida!']);
        break;

}

?>