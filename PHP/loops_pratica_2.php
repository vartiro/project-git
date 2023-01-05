<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php
  
      $lista_associativa = array(
        Array('a' => 'catgirl', 'b' => 'colorful hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'sexy'),
        Array('a' => 'vampiregirl', 'b' => 'white hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'cute')

      );

      echo '<pre>';
        print_r($lista_associativa);
      echo '</pre>';


      foreach($lista_associativa as $idx => $arrays){
        //print_r($arrays);
        //echo '<br>';
      
        foreach($arrays as $idx2 => $tags){
          echo "$idx2 => $tags <br>";
        }

        echo '<hr>';

      }
  

    ?>
    
  </body> 
</html>