<?php
    include_once("../conexao/conexao.php");
    $email=$_POST["email"];
    $sql="SELECT * FROM usuario WHERE email='$email';";
    $resultado=mysqli_query($conexao,$sql);
    if(mysqli_num_rows($resultado)>0){
        $chave=
    }