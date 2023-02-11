<?php 

  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $num1 = $_POST["num1"]; 
    $num2 = $_POST["num2"]; 
    $soma = $num1 + $num2; 
    echo "<script type='text/javascript'>alert('A soma dos números é: $soma');</script>"; 
  } 

?>