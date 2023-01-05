<html>
  <head>
  	  <meta charset="utf-8">
	  <title>Aula 1</title>
  </head>
  <body>
  	  <?php  	   
       define('BD_URL', 'endereço_bd_dev');
       define('BD_USUARIO', 'usuario_bd_dev');
       define('BD_SENHA', 'senha_bd_dev');

       //  logica  \\

       define('BD_URL', 'endereço_bd_ignorado');

       echo BD_URL . '<br>';
       echo BD_USUARIO . '<br>';
       echo BD_SENHA . '<br>';



      ?>
  </body>
</html>