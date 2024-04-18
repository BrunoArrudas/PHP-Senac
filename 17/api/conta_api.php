<?php

require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch ($action){
    case 'listar':
        echo ContaRepository::getAllContas();
        break;
}

?>