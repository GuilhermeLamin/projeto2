<?php


  session_start();


  $login = $_POST['login'];
  $senha = $_POST['senha'];



   if ($login == 'admin' and $senha == 'admin') {
   	   echo("Olá, administrador!");

       $_SESSION['nome'] = "Administrador";
       $_SESSION['login'] = "admin";

   	   echo ('<meta http-equiv="refresh" content="2;url=listaProfessores.php">');

   }else{
   	   echo("Dados inválidos");

   	   echo ('<meta http-equiv="refresh" content="2;url=listaProfessores.php">');
   }