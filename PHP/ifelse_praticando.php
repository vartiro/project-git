<html>
  <head>
  	  <meta charset="utf-8">
	  <title>Aula 1</title>
  </head>
  <body>
  	  <?php

        ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

        $usuario_possui_cartao = true;
        $valor_compra = 200;

        $valor_fret = 50;
        $recebeu_desconto_frete = false;


        if($usuario_possui_cartao && $valor_compra >= 400){
          $valor_fret = 0;
          $recebeu_desconto_frete = true;
        } else if($usuario_possui_cartao && $valor_compra >= 200) {
          $valor_fret = 25;
        } else if ($usuario_possui_cartao && $valor_compra >= 100){
          $valor_fret = 40;
        } 

      ?>

      <h1>Detalhes do pedido</h1>

      <p>Possui cartão da loja?
        <?php
          if($usuario_possui_cartao){
            echo 'SIM';
          } else {
            echo 'NÃO';
          }
        ?>
      </p>

      <p>Valor Compra: <?= $valor_compra; ?></p>

      <p>Valor Frete:
        <?=
          $valor_fret
        ?>
      </p>


  </body>
</html>