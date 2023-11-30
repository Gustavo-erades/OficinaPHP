<?php
    include_once("../conexao/conexao.php");
    if(isset($_POST["enviar"])){
        $email=$_POST["email"];
        $senha=md5($_POST["senha"]);
        $sql="SELECT * FROM USUARIO WHERE 
        email='$email' AND senha='$senha'"; 
        $resultado=mysqli_query($conexao,$sql);
        mysqli_close($conexao);
        if(mysqli_num_rows($resultado)>0){
            $dados=mysqli_fetch_array($resultado);
            header("Location:../home.php");
            session_start();
            $_SESSION["logado"]=true;
            $_SESSION["nome"]=$dados["nome"];
            $_SESSION["idade"]=$dados["dt_nascimento"];
            $_SESSION["email"]=$dados["email"];
        }else{
            header("Location:../login.php");
        }
    }