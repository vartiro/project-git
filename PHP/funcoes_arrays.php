<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      // se houver somente uma variavel em um array ele nao vai ser contado como array pela função is_array()   

      /*
      $array = ['money','infinite']
      $retorno = is_array($array)

      if($retorno) {
        echo 'é um array'
      } else {
        echo 'Nao é um array'
      }
      */

      /*
      $array = ['a' => 10, 'b' => 20, 'c' => 30];
      echo '<pre>';
      print_r($array);



      $chaves_array = array_keys($array);
      echo '<pre>';
        print_r($chaves_array);
      echo '<pre>';
      */

      /*
      $array = ['mouse', 'teclado', 'monitor', 'gpu', 'cpu', 'ram', 'case', 'cooler', 'power-supply'];

      echo '<pre>';
        print_r($array);
      echo '<pre>';

      asort($array);
      echo '<pre>';
        print_r($array);
      echo '<pre>';
       echo count($array);
      */

      /*
      $array1 = [1,2,3,4,];
      $array2 = [5,6,7,8,9];
      $array3 = [10];

      $array = array_merge($array1,$array2,$array3);
      echo '<pre>';
        print_r($array);
      echo '<pre>';
      */

      /*
      $string = '26-04-2022';

      $array_retorno = explode('-', $string);
      echo '<pre>';
        print_r($array_retorno);
      echo '<pre>';

      echo $array_retorno[2].'/'.$array_retorno[1].'/'.$array_retorno[0];
      */

      $array = ['I ', 'am ', 'going ', 'to ', 'be ', 'the ', 'most ', 'knowlodgeble being in existance'];

      $array_retorno = implode($array);

      echo '<pre>';
        print_r($array_retorno);
      echo '<pre>';


    ?>
    
  </body> 
</html>