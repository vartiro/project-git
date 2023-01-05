<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>
    <?php

      function impostoTotal($salario){
        if($salario > 4664.68){
          return ($salario / 100) * 27.5;

        } else if($salario > 3751.06 && $salario < 4664.68){
          return $salario /= 100 * 22.5;

        } else if($salario > 2826.66 && $salario < 3751.05){
          return $salario /= 100 * 15;

        } else if($salario > 1903.99 && $salario < 2826.65){ 
          return $salario /= 100 * 7.5;

        } else {
          return $salario * 0;

        }
      }

      $imposto = impostoTotal(12000);

      echo "Seu imposto é de $imposto R$"

    ?>

  </body> 
</html>