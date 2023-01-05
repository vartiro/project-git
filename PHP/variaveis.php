<html>
  <head>
  	  <meta charset="utf-8">
	  <title>Aula 4</title>
  </head>
  <body>

    <?php 


      //string // = para atribuir um valor

      $nome = 'Felipe Prada '; // ou "" nunca "'
      
      //int
      $idade = 18;

      //float
      $peso = 82.5;

      //boolean
      $fumante = true; // 1 = true é vazio 

      //logica

      $idade = 30;


      //mudou o tipo da variavel de int para string 
      $idade = 'hey'



    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p> 
    <br>
    <p>Idade: <?= $idade ?></p> 
    <br>
    <p>Peso: <?= $peso ?></p> 
    <br>
    <p>Fumante: <?= $fumante ?></p> 

  </body>
</html>