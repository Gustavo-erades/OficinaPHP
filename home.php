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
    <title>Ver dados</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Data de nascimento
                </th>
                <th>
                    Senha
                </th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($resultado)){
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
                    echo $row["dt_nascimento"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["senha"];
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>