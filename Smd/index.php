<!DOCTYPE html> 
<html> 
<head> 
  <title>Somador de Números</title> 
</head> 
<body> 
  <header> 
    <h1>Somador de Números</h1> 
  </header> 
  <main> 
	//Criando um formulário dentro do html
    <form action="somador.php" method="post"> 
		//Rotulo do campo de requisição num1
      <label for="num1">Primeiro Número:</label> 
		// campo de digitação "input" com o identificador = num1 e nome = num1
	  <input type="text" id="num1" name="num1"> 
      <br> 
	  	//Rotulo do campo de requisição num2
      <label for="num2">Segundo Número:</label> 
		// campo de digitação "input" com o identificador = num2 e nome = num2
	  <input type="text" id="num2" name="num2"> 
      <br><br> 
      <input type="submit" value="Somar"> 
    </form> 
  </main> 
  <footer> 
    <p>Copyright &copy; 2023 Somador de Números</p> 
  </footer> 
</body> 
</html>



