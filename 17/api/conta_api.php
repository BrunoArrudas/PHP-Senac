<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch($action) {
    
    case 'listar':
        listarClientes();
        break;
    case 'buscar':
        buscarClientePorId();
        break;
    case 'cadastrar':
        cadastrarCliente();
        break;
    case 'atualizar':
        atualizarCliente();
        break;
    case 'excluir':
        excluirCliente();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);

}

function listarClientes() {
    $action = ContaRepository::getAllContas();
    echo json_encode($action);
}

function buscarClientePorId() {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $cliente = ContaRepository::getContaById($id);

        if($cliente) {
            echo json_encode($cliente);
        } else {
            http_response_code(404); // Cliente não encontrado
            echo json_encode(['error' => 'Cliente não encontrado']);
        }
    } else {
        http_response_code(405); // Método não permitido
    }
}

function insertConta() {
    if($_SERVER ['REQUEST_METHOD' === 'POST']){
       $data = json_decode(file_get_contents("php://input"));
       $nome = $data->nome;
       $cpf = $data->cpf;

       $success = ContaRepository::insertConta($nome, $cpf);
       echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function atualizarCliente() {
    if($_SERVER ['REQUEST_METHOD' === 'POST']){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $nome = $data->nome;
        $cpf = $data->cpf;
 
        $success = ContaRepository::updateCliente($id, $nome, $cpf);
        echo json_encode(['success' => $success]);
    } else {
         http_response_code(405);
    }
}

function excluirCliente() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $success = ContaRepository::deleteCliente($id);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

?>