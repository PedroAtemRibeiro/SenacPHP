<?php 

  if (!isset($_COOKIE["nome"])) {
    setcookie("nome", "Calixto");
  }

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

  <?php
    print $_COOKIE['nome'];
  ?>


  </body>
</html>