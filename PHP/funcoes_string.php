<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>
    <?php

      $texto = "Curso de Cyber Security <br>";

      echo strtolower($texto);
      echo strtoupper($texto);
      echo strlen($texto);
      echo ucfirst($texto); 
      echo lcfirst($texto);
      echo str_replace('Curso', 'Hello', $texto);
      echo substr($texto,0, 30); 

      
      $texto2 = "Texto é um conjunto de palavras e frases encadeadas que permitem interpretação e transmitem uma mensagem. É qualquer obra escrita em versão original e que constitui um livro ou um documento escrito. Um texto é uma unidade linguística de extensão superior à frase. Em artes gráficas, o texto é a matéria escrita, por oposição a toda a parte iconográfica (ilustrações e outros elementos). É a parte principal do livro, revista ou periódico, constituída por composição maciça, desprovida de títulos, subtítulos, epígrafes, fórmulas, tabelas, etc. <br>";

      echo substr($texto2, 59, 189);  

    ?>



  </body> 
</html>