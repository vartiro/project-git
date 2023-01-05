<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php
      
      $itens  = ['mouse', 'teclado', 'monitor', 'gpu', 'cpu', 'ram', 'case', 'cooler', 'power-supply'];

      echo '<pre>';
        print_r($itens);
      echo '</pre>';

      foreach($itens as $item) {
        echo "$item <br>";
      

      }

    ?>
    
  </body> 
</html>