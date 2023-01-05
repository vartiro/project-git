<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php
  
      $array = [];   

      while(count($array) <= 59){
        
        $num = rand(1,60);
      
        if(!in_array($num, $array)){
          $array[] = $num;
        }
      }

      echo '<pre>';
      print_r($array)

    ?>
    
  </body> 
</html>