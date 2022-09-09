<?php
include("conexao.php");
include("Listar.php");

$listarProdutos = new Listar();
$listarProdutos->Pesquisar();

?>