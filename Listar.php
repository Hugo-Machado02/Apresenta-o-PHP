<?php
class Listar{
    public $codProduto;

    public function Pesquisar(){
        include("conexao.php");
        $this->codProduto = $_POST['id'];

        $sql=mysqli_query($conexao, "SELECT * FROM jogos WHERE codProduto LIKE '$this->codProduto'");

        $validar = mysqli_num_rows($sql);

        if ($validar == 0)
        {
            echo "<br><br><span style='color: #f60002;'>Livro Não encontrado!!</span>";
            echo "<a href='paginaInicial.html'>Voltar</a>";
        }
        else
        {
            echo "<table border='1px'>";
                echo "<tr>";
                    echo "<td><strong>ID</strong></td>";
                    echo "<td><strong>Nome</strong></td>";
                    echo "<td><strong>Gênero</strong></td>";
                    echo "<td><strong>Classificação Indicativa</strong></td>";
                echo "</tr>";
            while ($listagem = mysqli_fetch_array($sql))
            {
                $id = $listagem['codProduto'];
                $nome = $listagem['nome'];
                $genero = $listagem['genero'];
                $classificacao = $listagem['Classificacao_Idade'];

                    echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nome</td>";
                        echo "<td>$genero</td>";
                        echo "<td>$classificacao</td>";
                    echo "</tr>";
            }
            echo "</table>";
            echo "<a class='link' href='paginaInicial.html'>Voltar</a>";
        }
    }
}

?>