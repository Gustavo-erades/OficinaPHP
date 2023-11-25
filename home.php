<!DOCTYPE html>
<?php
    include_once("./conexao/conexao.php");
    $sql="SELECT * FROM USUARIO;";
    $resultado=mysqli_query($conexao,$sql);
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
                    Olá, Gustavo Êrades Vilarinho Silva
                </h1>
            </div>
            <div>
                <h3>
                    Idade: 20 anos
                </h3>
                <h3>
                    Email: eradesvilarinho@gmail.com
                </h3>
            </div>
        </div>
        <div id="div_tabela">
            <div>
                <table>
                    
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