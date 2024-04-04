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
    
}










?>