<?php

require_once 'database/PedidoRepository.php';
require_once 'database/ProdutoRepository.php';

$action = $_GET['action'];

switch ($action){
    case 'listar':
        echo json_encode(PedidoRepository::getAllPedidos());
        break;
    default:
        break;
}

$action1 = $_GET['action'];

switch ($action1){
    case 'listarP';
        echo json_encode(ProdutoRepository::getAllProdutos());
        break;
}

?>