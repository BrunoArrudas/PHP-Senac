<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch($action) {
    
    case 'listar': //
        listarContas();
        break;
    case 'buscar': // 
        buscarContaPorId();
        break;
    case 'cadastrar':
        cadastrarConta();
        break;
    case 'atualizar':
        atualizarConta();
        break;
    case 'excluir':
        excluirConta();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);

}

function listarContas() {
    $action = ContaRepository::getAllContas();
    echo json_encode($action);
}

function buscarContaPorId() {
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

function cadastrarConta() {
    if($_SERVER ['REQUEST_METHOD'] === 'POST'){
       $data = json_decode(file_get_contents("php://input"));
       $id = $data->id;
        $numero = $data->numero;
        $saldo= $data->saldo;
        $tipo = $data->tipo;
        $limite_cheque_especial = $data->limite_cheque_especial;
        $taxa_rendimento = $data->taxa_rendimento;

       $success = ContaRepository::insertConta($id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento);
       echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function atualizarConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $numero = $data->numero;
        $saldo= $data->saldo;
        $tipo = $data->tipo;
        $limite_cheque_especial = $data->limite_cheque_especial;
        $taxa_rendimento = $data->taxa_rendimento;
        $success = ContaRepository::updateConta($id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento );
        
        echo json_encode(['success' => $success]);
    } else {
         http_response_code(405);
    }
}

function excluirConta() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $success = ContaRepository::deleteConta($id);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

?>