<?php
$host="localhost";
$usuario="root";
$senha="";
$bd="cadastro_jogos";
$conexao = mysqli_connect($host, $usuario, $senha, $bd);
mysqli_select_db($conexao, $bd)
?>