<?php session_start(); ?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

  <?php
    require 'session.php'
  ?>
    
    <h1>
      A sua sessão foi iniciada em
      <?php echo $_SESSION['ultimo_login']?>
      e você já fez
      <?php echo $_SESSION['reqs']?> requisições
    </h1>

    <?php
      if($_SESSION['reqs'] >= 10){
        echo '<h1>Você ganhou um prêmio!</h1>';
        $_SESSION['reqs'] = 0;
      } 
      else {
        echo '<h1>Nada por aqui...</h1>';
      }
    ?>
    
  </body>
</html>