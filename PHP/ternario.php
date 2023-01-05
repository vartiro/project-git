<html>
  <head>
  	  <meta charset="utf-8">
	  <title>Aula 1</title>
  </head>
  <body>
  	  <?php

        

        $usuario_possui_cartao = true;
        $valor_compra = 89;

        $valor_fret = 50;
        $recebeu_desconto_frete = true;

        $valor_fret_aux = $usuario_possui_cartao && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao && $valor_compra >= 200  ? 25 : ($usuario_possui_cartao && $valor_compra >= 100 ? 40 : $valor_fret));

        $recebeu_desconto_frete = $valor_fret != $valor_fret_aux ? true : false;

        $valor_fret = $valor_fret_aux;

        /*
        if($usuario_possui_cartao && $valor_compra >= 400){
          $valor_fret = 0;
        } else if($usuario_possui_cartao && $valor_compra >= 200) {
          $valor_fret = 25;
        } else if ($usuario_possui_cartao && $valor_compra >= 100){
          $valor_fret = 40;
        } else {
          $recebeu_desconto_frete = false;
        }
        */
      ?>

      <h1>Detalhes do pedido</h1>

      <p>Possui cartão da loja?
        <?=
          $usuario_possui_cartao ? 'SIM' : 'NAO';
        ?>
      </p>

      <p>Valor Compra: <?= $valor_compra; ?></p>

      <p> Tem desconto do frete?
        <?php
          $teste = $recebeu_desconto_frete ? 'SIM' : 'NAO';
        
          echo $teste;
        ?>
      </p>

      <p>Valor Frete:
        <?=
          $valor_fret;
        ?>
      </p>


  </body>
</html>