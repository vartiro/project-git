<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      //in_array() retorna true or false se o valor estiver no array
      //array_search() retorna o indice do array caso ele exista


      //  $lista_associativa = array('a' => 'catgirl', 'b' => 'colorful hair', 'c' => 'thick', 'd' => 'petite', 'e' => 'sexy');
      
        $lista_associativa = array('catgirl', 'colorful hair', 'thick', 'petite', 'sexy');
    

        echo '<pre>';
        var_dump($lista_associativa);
        echo '<pre>';

        echo in_array('catgirl', $lista_associativa);
        //1 = true
        //vazio = false
        echo '<br>';

        echo array_search('catgirl', $lista_associativa); //false = null nesssa funçao 
    ?>
    
  </body> 
</html>