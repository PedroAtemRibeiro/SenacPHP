<html>
  <head>
    <title>GET e POST PHP</title>
  </head>
  <body>

   

    
    <h1>Meu Formulário</h1>
      <?php
        require 'get.php';
      ?>
      <form>
       <label for='campo_de_nome'>Digite seu nome</label>
       <input name='nome_usuario' id='campo_de_nome' type='text'/>
       <button type='submit'>Enviar</button>
      </form> 

      <?php
        require 'post.php';
      ?>
      <form method='post'>
       <label for='campo_mood'>Digite seu sentimento</label>
       <input name='mood' id='campo_de_mood' type='text'/>
       <button type='submit'>Enviar</button>
      </form> 

    
  </body>
</html>