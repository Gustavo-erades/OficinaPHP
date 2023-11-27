<?php
    include_once("../conexao/conexao.php");
    $id=$_GET["id"];
    $sql="DELETE FROM USUARIO WHERE ID=$id";
    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
    header("Location:../home.php");