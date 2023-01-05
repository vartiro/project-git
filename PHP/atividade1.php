<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>
    <?php

      $idade = 38;
      $peso = 78;

      $doar_sangue = $idade >= 16 && $idade <= 69 && $peso >= 78 ? 'Atende aos requisitos' : 'Não atende aos requisitos';
    ?>

    <h1>Formulario do Doador</h1>
    <p>Idade: <?= $idade; ?></p>
    <p>Peso: <?= $peso; ?></p>
    <p>Atende aos requisitos? <?= $doar_sangue; ?></p>
    <hr>
  </body> 
</html>