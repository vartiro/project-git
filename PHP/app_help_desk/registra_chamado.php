<?php

  session_start();

  $texto =  $_SESSION['id'] . '#' . implode('#', str_replace('#', '-', $_POST)) . PHP_EOL;

  //abrindo o arquivo
  $arquivo = fopen('arquivo.hd', 'a'); 
  //escrevendo o arquivo
  fwrite($arquivo, $texto);
  //fechando o arquivo;
  fclose($arquivo);


  //voltar para abrir_chamado
  header('Location: abrir_chamado.php');
?>