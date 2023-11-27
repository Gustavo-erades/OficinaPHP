<!DOCTYPE html>
<?php
    include_once("./conexao/conexao.php");
    session_start();
    if(isset($_SESSION["logado"])){
        $sql="SELECT * FROM USUARIO;";
        $resultado=mysqli_query($conexao,$sql);
        function data($data){
            return date("d/m/Y",strtotime($data));
        }
        function idade($nascimento){
            $idade= intval(date("Y"))-intval(date("Y",strtotime($nascimento)));
            return $idade;
        }
    }else{
        header("Location:login.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/styleHome.css">
    <title>Home-ver dados</title>
</head>
<body>
    <div class="container">
        <div id="header">
            <div>
                <img src="./imagens/estacio-logo.png" alt="logo da estácio" width="40px">
                <h1>
                    Olá, <?= $_SESSION["nome"] ?>
                </h1>
            </div>
            <div>
                <h3>
                    Idade: <?= idade($_SESSION["idade"]);?> anos
                </h3>
                <h3>
                    Email: <?= $_SESSION["email"] ?>
                </h3>
            </div>
        </div>
        <button id="sair">
            <a href="logout.php">
                Encerrar sessão
            </a>
        </button>
        <div id="div_corpo">
           <div class="div_tabela">
                <h2>Dados registrados no banco de dados:</h2>
           </div>
           <div class="div_tabela dados_banco">
                <table>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Data de nascimento
                        </th>
                        <th id="th_del">
                            Modificar
                        </th>
                    </tr>
                    <?php
                        while($row=mysqli_fetch_array($resultado)){
                            echo "<tr>";
                            echo "<td>";
                            echo $row["id"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["nome"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["email"];
                            echo "</td>";
                            echo "<td>";
                            echo data($row["dt_nascimento"]);
                            echo "</td>";
                            echo "<td class='deletar'>";
                            echo "<a href='./cadastro/deletarCadastro.php?id=".$row["id"]."'>";
                            echo "deletar";
                            echo "<a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        
                    ?>
                </table>
           </div>
        </div>
        <div id="footer">
            <p>
                &copy; desenvolvido por Gustavo Êrades
            </p>
        </div>
    </div>
</body>
</html>