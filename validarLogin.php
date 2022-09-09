<?php
include ("conexao.php");
include ("Login.php");

//captura dos dados do HTML
$login = new Login();
$login->ValidarLogin();

?>