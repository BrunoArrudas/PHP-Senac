<?php

class Carro{
    //Propriedades
    public $marca;  //Public deixa o atributo acessivel fora da classe.
    public $modelo;
    public $anomodelo;

    //Metodo Construtor
    public function __construct($marca, $modelo, $ano) //Metodo construtor - Obrigado o usuario a passar valores.
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anomodelo = $ano; //$this-> Recolhendo o valor da variavel fora do construtor.
    }

    //Função / Comportamento / Metodo
    public function ligar(){
        echo "<br> O carro esta ligado. <br>";
    }
}

$meuCarro = new Carro("Toyota","Corolla", 2024); // Instancia um novo objeto do tipo Carro.
echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->anomodelo";
$meuCarro->ligar(); //Chama a função ligar do objeto meuCarro.

?>