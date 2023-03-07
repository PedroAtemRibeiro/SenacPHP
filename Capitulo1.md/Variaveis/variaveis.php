<?php
  $ano_nascimento = 2000;
  $ano_atual = 2023;
  $idade = $ano_atual - $ano_nascimento;
  $nome = 'João da Silva';

  $mensagem = '';

  if ($idade >= 60) {
    $mensagem = 'Você é velhinho';
  }
  else if ($idade >= 18){
    $mensagem = 'Você é adulto';
  }
  else{
    $mensagem = 'Você é uma criança';
  }
?>

  <html>
    <head>
      <title> Página do <?php echo $nome?></title>
    </head>
    <body>
      <h1>El@ tem <?php echo $idade?> anos de idade!</h1>
      <h2><?php echo $mensagem?></h2>
    </body>
  </html> 