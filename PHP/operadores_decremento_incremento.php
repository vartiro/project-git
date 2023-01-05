<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    <h3>Pós-incremento</h3>
    <?php
      
      $a = 10;
      
      echo "O valor contido em a é $a";
      echo '<br> O valor contido em a após o incremento é '. $a++;
      echo "<br> O valor contido em a é $a";        

    ?>
    <h3>Pré-incremento</h3>
    <?php
      
      $a = 10;
      
      echo "O valor contido em a é $a";
      echo '<br> O valor contido em a após o incremento é '. ++$a;
      echo "<br> O valor contido em a é $a";        

    ?>
    <h3>Pós-decremento</h3>
    <?php
      
      $a = 10;
      
      echo "O valor contido em a é $a";
      echo '<br> O valor contido em a após o decremento é '. $a--;
      echo "<br> O valor contido em a é $a";        

    ?>
    <h3>Pré-decremento</h3>
    <?php
      
      $a = 10;
      
      echo "O valor contido em a é $a";
      echo '<br> O valor contido em a após o decremento é '. --$a;
      echo "<br> O valor contido em a é $a";        

    ?>
    
  </body> 
</html>