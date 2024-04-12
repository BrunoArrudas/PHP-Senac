<?php
require_once '01_solucao.php';
$repository = new DatabaseRepository();

// echo $repository->addItem("Abacaxi", 1); Adicionando item.
$repository->deleteItem(4);
?>