<?php
class Login{
    public $usuario;
    public $senha;

    public function ValidarLogin(){
        include("conexao.php");

        $this->usuario = $_POST["usuario"];
        $this->senha = $_POST["senha"];


        $bd = mysqli_query($conexao,"SELECT * FROM login WHERE usuario='$this->usuario' AND senha='$this->senha'");
        $validar = mysqli_num_rows($bd);

        if ($validar > 0)
        {
            header("Location:paginaInicial.html");
        }
        else
        {
            echo "<span style='color: #f60002;'>Usuário ou senha incorretos!</span><br><br>";
            echo "<a href='index.html'>Voltar</a>";
        }
        }
}

?>