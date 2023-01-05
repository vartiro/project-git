<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      //arrays sequenciais
        
        /*
        $lista_hentai = array('catgirl', 'colorful hair', 'thick', 'petite', 'sexy');
        $lista_desejos = ['catgirl', 'colorful hair', 'thick', 'petite', 'sexy'];
        */

        $lista_associativa = array('a' => 'catgirl', 'b' => 'colorful hair', 'c' => 'thick', 'd' => 'petite', 'sexy');
  
        /*
        echo '<pre>';
        var_dump($lista_desejos);
        echo '<hr>';
        echo '<pre>';
        print_r($lista_desejos);  
        */

        //echo $lista_hentai[0];

        echo '<pre>';
        var_dump($lista_associativa);

        echo $lista_associativa['b'];
    ?>
    
  </body> 
</html>