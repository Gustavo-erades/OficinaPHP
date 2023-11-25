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
    <title>Home-ver dados</title>
</head>
<body>
    <div class="container">
        <div>
            <div>
                nome
            </div>
            <div>
                idade
            </div>
        </div>
        
    </div>
</body>
</html>