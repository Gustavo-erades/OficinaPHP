<?php
    include_once("conexao.php");
    if(isset($_POST["enviar"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $idade=$_POST["idade"];
        $senha=$_POST["senha"];
        $slq="INSERT INTO USUARIO(NOME,DT_NASCIMENTO,EMAIL,SENHA) 
        VALUES('$nome','$idade','$email',MD5('$senha'));";
        mysqli_query($conexao,$slq);
        header("Location:home.php");
    }