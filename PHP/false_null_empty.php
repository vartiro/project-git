<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      //false (true/false) valores booleanos
      //empty e null são valores especiais

      //false = empty
      //false != null
      //null = false
      //null = empty
      //empty != null
      //empty = false

      $funcionario1 = null;
      $funcionario2 = '';

      if(is_null($funcionario2)){
        echo 'Sim é nulo';
      } else {
        echo 'Nao é nulo';
      }

    ?>
    
  </body> 
</html>