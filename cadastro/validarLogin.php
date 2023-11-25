<?php
    include_once("../conexao/conexao.php");
    if(isset($_POST["enviar"])){
        $email=$_POST["email"];
        $senha=md5($_POST["senha"]);
        $sql="SELECT * FROM USUARIO WHERE 
        email='$email' AND senha='$senha'";
        $resultado=mysqli_query($conexao,$sql);
        if(mysqli_num_rows($resultado)>0){
            header("Location:../home.php");
        }else{
            header("Location:../login.php");
        }
    }