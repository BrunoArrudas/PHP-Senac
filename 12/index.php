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

     abstract public function atacar($inimigo);

     public function sofrerDano($danoSofrido){

        $this->pontosVida -= $danoSofrido;
        if($this->pontosVida <=0){
            $this->morrer();
        }

     }

     public function recuperarVida($quantidade){
           $this->pontosVida += $quantidade;
           echo "{$this->nome} recuperou $quantidade pontos de vida. <br>";
     }

     private function morrer(){
           $this->vivo = false;
           echo "{$this->nome} morreu. <br>";
     }
}

class Guerreiro extends Personagem{
   public function atacar($inimigo)
   {

   }
}

class Mago extends Personagem{
   public function atacar($inimigo)
   {
    
   }
}

// Não é possivel instanciar um objeto a partir de uma classe abstrata
//$personagem1 = new Personagem();

$guerreiro = new Guerreiro("Aragorn",100,20);

echo "Dados do Guerreiro:  <br>";
$guerreiro->exibirDados();

//-----------------------------------------------//

$mago = new Mago("Gandalf", 80, 30);

echo "Dados do Mago:  <br>";
$mago->exibirDados();

//-----------------------------------------------//



?>