
<?php

  function dizer_ola_mundo(){ // declaração da função
    echo "Olá mundo! <br>";
  } 

  function dizer_ola($nome){
    echo "Olá, $nome!<br>";
  }

  function calcular_idade($ano_nascimento){
    return date('Y') - $ano_nascimento;
  }

  function fatorial($n){
    if($n == 0) {
      return 1; } 
    else {
      return $n * fatorial($n - 1);
    }
  }


?>


