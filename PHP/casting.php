<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    <?php
    

    //gettype() => retorna o tipo da variavel
    $valor = false;
    
    //$valor2 = (float)$valor; 
    //$valor2 = (string)$valor;
    
    //$valor2 = (int)$valor;
    //$valor2 = (string)$valor;

    //$valor2 = (float)$valor;
    //$valor2 = (boolean)$valor;

    $valor2 = (int)$valor;

    echo $valor .' '. gettype($valor);
    echo '<br />'; 
    echo $valor2 .' '. gettype($valor2);
    ?>
    
  </body> 
</html>