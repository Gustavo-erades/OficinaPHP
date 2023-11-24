<?php
    include_once("conexao.php");
    if(isset($_POST["enviar"])){
        $email=$_POST["email"];
        $senha=md5($_POST["senha"]);
        $sql="SELECT * FROM USUARIO WHERE 
        email='$email' AND senha='$senha'";
        $resultado=mysqli_query($conexao,$sql);
        echo $resultado;
    }