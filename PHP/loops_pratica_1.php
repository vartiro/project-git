<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php
  
      //for(variavel, condiçao, incremento)

      $array = Array(
        Array('titulo' => 'titulo noticia 1', 'conteudo' => 'conteudo noticia 1'),
        Array('titulo' => 'titulo noticia 2', 'conteudo' => 'conteudo noticia 2'),
        Array('titulo' => 'titulo noticia 3', 'conteudo' => 'conteudo noticia 3'),
        Array('titulo' => 'titulo noticia 4', 'conteudo' => 'conteudo noticia 4')
      );



      $idx = 0;

      while($idx < count($array)){

        echo '<h3>' . $array[$idx]['titulo'] . '</h3>';
        echo '<p>' . $array[$idx]['conteudo'] . '</p>';          
      
        echo '<hr>';
      
        $idx++;

      }

    ?>
    
  </body> 
</html>