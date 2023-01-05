<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      $lista_sonhos = ['sonho1' => ['a' => 'catgirl', 'b' => 'colorful hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'sexy'], 'sonho2' => ['a' => 'vampiregirl', 'b' => 'white hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'cute']];

      $lista_coisas = [];

      $lista_coisas['sonho1'] = ['a' => 'catgirl', 'b' => 'colorful hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'sexy'];
      $lista_coisas['sonho2'] = ['a' => 'vampiregirl', 'b' => 'white hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'cute'];

      echo '<pre>';
      var_dump($lista_coisas);
      echo '<hr>';

      echo $lista_sonhos['sonho2']['a']
       
    ?>
    
  </body> 
</html>