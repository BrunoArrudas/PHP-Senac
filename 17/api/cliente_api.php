<?php

require_once '../database/ClienteRepository.php';

$action = $_GET['action'];

switch($action){
    
    case 'listar':
        echo json_encode(ClienteRepository::getAllClientes());
        break;

    default:
    http_response_code(400); //Requisição invalida
    echo json_encode(['error' => 'ação invalida']);
}

function listarClientes(){
    $clientes = ClienteRepository::getAllClientes();
    echo json_encode($clientes);
}

function buscarClientePorId() {

}

function cadastrarCliente() {

}

function atualizarCliente() {

}

function excluirCliente() {
    
}

// Create Read Update Ddelete
// Create = POST (INSERT)
// Read = GET (SELECT)
// Update = POST(GET) (UPDATE SET)
// Delete = POST (DELETE)


?>