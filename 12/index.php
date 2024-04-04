<?php

//Definição da classe abstrata Personagem
abstract class Personagem{ 
     //Atributos protegidos para encapsulamento
     protected $nome;
     protected $pontosVida;
     protected $poderAtaque;
     private $vivo;

     //Metodo construtor
     public function __construct($nome, $pontosVida, $poderAtaque)
     {
        $this->nome = $nome;
        $this->pontosVida = $pontosVida;
        $this->poderAtaque = $poderAtaque;
        $this->vivo = true;
     }

     public function exibirDados(){
        echo "Nome: {$this->nome}, Pontos de Vida: {$this->pontosVida}, Vivo: ".($this->vivo? 'Sim':'Não')."<br>";
     }

     public function sofrerDano($danoSofrido){

        $this->pontosVida -= $danoSofrido;
        if($this->pontosVida <=0){
            $this->morrer();
        }

     }

     public function recuperarVida(){

     }

     private function morrer(){
           $this->vivo = false;
           echo "{$this->nome} morreu. <br>";
     }
}

class Guerreiro extends Personagem{

}

// Não é possivel instanciar um objeto a partir de uma classe abstrata
//$personagem1 = new Personagem();

$guerreiro = new Guerreiro("Aragorn",100,20);
echo "Dados do Guerreiro:  <br>";
$guerreiro->exibirDados();
echo "Sofreu dano de 120 ";
$guerreiro->sofrerDano(120);

?>