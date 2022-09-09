<?php
    include("jogo.php");
    include("Cadastro.php");
    include("conexao.php");
    
    $cadastrarJogos = new Cadastro();
    $cadastrarJogos->Cadastrar();

?>