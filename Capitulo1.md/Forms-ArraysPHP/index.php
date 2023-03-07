<html>
  <head>
    <title>Meu formulario</title>
  </head>
  <body>
    <?php
        require 'get.php'
    ?>
   <form method='GET'>
      <input type='checkbox' name='sabores[]' id='mussarela' value=″Mussarela″>
      <label for='mussarela'> Mussarela </label>
     <input type='checkbox' name='sabores[]' id='palmito' value=″Palmito″>
      <label for='palmito'> Palmito </label>
     <input type='checkbox' name='sabores[]' id='calabresa' value=″Calabresa″>
      <label for='calabresa'> Calabresa </label>
      <button type=″submit″> Enviar</button>
    </form>
  </body>
</html>