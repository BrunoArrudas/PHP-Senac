<?php

   // FLOATS E BOOLEANOS

   // Exercício 1 - Índice de Massa Corporal (IMC):
   //  Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.
   
   $altura = 1.80;
   $peso = 80.5;
    
   $alt = $altura * $altura;
   $calculo_imc = $peso / $alt; 

   echo " Resultado: $calculo_imc";

   if(($calculo_imc) <= 18){
     echo "<br> Baixo Peso <br>";
   }
   if(($calculo_imc) <= 25){
    echo "<br> Normal <br>";
   }
   if(($calculo_imc) >= 30){
    echo "<br> Sobre Peso <br>";
   }

   // Exercício 2 - Verificação de Pagamento:
   // Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.
  
   $saldo_conta = 100;
   $usuario = true;
   $valor_compra = 15.50;
   $transacao = $saldo_conta - $valor_compra;

   if(($usuario) == true && $transacao >= 0){
      echo "Transação concluida com sucesso <br>";
   } else {
      echo "Saldo insuficiente <br>";
   }



   // Exercício 3 - Conversor de Temperatura:
   // Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.
   
   $temp_cel = 36.4;
   $formula = $temp_cel * 9 / 5 + 32;
    
   echo "Conversão para Fahrenheit: $formula <br>";

   // Exercício 4 - Verificação de Acesso:
   // Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
   
   $user_idade = true;
   $aut_pais = false;

   if($user_idade || $aut_pais ){
    echo "Acesso Autorizado";
   } else {
    echo "Acesso Negado";
   }

   // Exercício 5 - Verificação de Números Primos:
   // Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
   
   

?>