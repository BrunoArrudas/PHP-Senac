<?php

abstract class Conta {

    private $numeroConta;
    private $saldo;
    private $cliente;

}

class contaCorrente extends Conta{
    private $limiteCheque;

    private function sacar(){

    }
}


class contaPoupanca extends Conta{

    private $taxaRendimento;
    
    private function rendimento(){

    }

}

class Cliente extends Conta{
    public $nome;
    private $cpf;
}

// Criando instâncias de Cliente
$cliente1 = new Cliente("João", "123456789-00");
$cliente2 = new Cliente("Maria", "987654321-00");

// Cirando instâncias de Contas
$contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
$contaPouapanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
$contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);

// Realizando operações nas contas
$contaCorrente1->sacar(100);
$contaCorrente2->transferir(200, $contaPouapanca1);
$contaPouapanca1->aplicarRendimento();

// Exibindo dados das contas:
echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
echo "Dados da Conta Poupança 1: $contaPouapanca1 <br>";
echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";










?>