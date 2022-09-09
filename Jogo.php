<?php
class Jogo{
    public $codProduto;
    public $nome;
    public $genero;
    public $Classificacao_Idade;

    public function validarCadastro(){
        include "conexao.php";

        if ($this->codProduto == "")
        {
            echo "<span style='color:red;'>Cadastro não Realizado! <br> Id do produto não Inserido!!</span><br><br>";
            echo "<a href='paginaInicial.html'>Voltar a pagina Inicial</a>";
            return 0;
        }
        
        $this->nome = $_POST["nome"];
        $this->genero = $_POST["genero"];
        $this->Classificacao_Idade = $_POST["classificacao"];

        $bd = mysqli_query($conexao, "INSERT INTO jogos(codProduto, nome, genero, Classificacao_Idade)  
        VALUES('$this->codProduto', '$this->nome', '$this->genero', '$this->Classificacao_Idade')");
        if ($bd == true)
        {
            echo "<span style='color: #2ecc71;'>Cadastro do Livro realizado com Sucesso!!</span><br><br>";
            echo "<a href='paginaInicial.html'>Pagina Inicial</a>";
        } 
        else 
        {
            echo "<span style='color: #f60002;'>Cadastro não concluido!!</span><br><br>";
            echo "<a href='paginaInicial.html'>Voltar a Página Inicial</a>";
        }
                
            }
        }

?>