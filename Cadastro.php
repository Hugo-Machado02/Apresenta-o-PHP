<?php
class Cadastro{
    public $game;

    public function Cadastrar(){
        include("conexao.php");
        
        $this->game = New Jogo();
        $this->game->codProduto = $_POST["id"];
        $this->game->nome = $_POST["nome"];
        $this->game->genero = $_POST["genero"];
        $this->game->Classificacao_Idade = $_POST["classificacao"];

        $this->game->validarCadastro();
    }
}
?>