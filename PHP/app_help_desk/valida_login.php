<?php

  session_start();

  //Usuários do sistema

  $perfis = array(1 => 'adiministrativo', 2 => 'usuario');

  $usuarios_sistema = [
  	['id' => 1, 'e' => 'muda@gmail.com', 's' => '12344321', 'perfil_id' => 1],
  	['id' => 2, 'e' => 'teste@gmail.com', 's' => '1234mudar','perfil_id' => 1],
    ['id' => 3, 'e' => 'maria@gmail.com', 's' => '1234mudar', 'perfil_id' => 2],
    ['id' => 4, 'e' => 'joao@gmail.com', 's' => '1234mudar', 'perfil_id' => 2]
  ];

  //Ver se o usuario foi autenticado
  $usuario_autenticado = false;
  $usuario_id = null;
  $usuario_perfil_id = null;

/*
  print_r($_GET);

  echo $_GET['email'];
  echo '<br>';
  echo $_GET['senha'];
*/

  //percorrer o array para checar se a um usuario e senha 
  foreach($usuarios_sistema as $user){

   	if($user['e'] == $_POST['email'] && $user['s'] == $_POST['senha']){
   	  $usuario_autenticado = true;
   	  $usuario_id = $user['id'];
      $usuario_perfil_id = $user['perfil_id'];
    }
  };

  if($usuario_autenticado){
  	$_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');

  } else {
  	$_SESSION['autenticado'] = 'NAO';
  	header('Location: index.php?login=erro');
  }

/*
  echo '<pre>';
  print_r($usuarios_sistema);

  echo '<br>';

  echo $_POST['email'];
  echo '<br>';
  echo $_POST['senha'];
*/

?>