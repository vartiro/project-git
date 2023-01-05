<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php
      $numx = 0;
      $numy = 0;

      while($numx <= 10 && $numy <=10){
        
        echo $numx .' x '. $numy . ' = ' . ($numx * $numy) . '<br>';
      
        ++$numx;


        while($numx >= 11){  
          $numx = 0;
          $numy ++;
        echo '<hr>';
        
        }
      }

    ?>
    
  </body> 
</html>