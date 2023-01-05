<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      //funçao void
      function boasVindas() {
        echo 'Bem vindo... <br>';
      }  

      boasVindas();

      //funçao com retorno

      function calcularAreaTerreno($altura, $comprimento) {
        return $altura * $comprimento . '<br>';
      }

      $resultado1 = calcularAreaTerreno(30, 25);
      echo $resultado1;

      ?>
    
  </body> 
</html>