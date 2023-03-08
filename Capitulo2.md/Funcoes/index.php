<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        
        require 'funcoes.php';

        dizer_ola_mundo();

        $nome = "Calixto";
        dizer_ola($nome);

        echo 'Eu tenho ' . calcular_idade(1982) . ' anos!';

        $fat = 6;
        echo ' <br> O fatorial de ' . $fat . ' é ' . fatorial($fat);

        $dobro = function ($x){
          return $x * 2;
        };

        echo '<br>' . $dobro(10);

  

      ?> 
     
  </body>
</html>