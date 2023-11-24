<?php
    include_once("conexao.php");
    if(isset($_POST["enviar"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $idade=$_POST["idade"];
        $senha=$_POST["senha"];
        $query="
            INSERTO INTO USUARIO(NOME, DT_NASCIMENTO, EMAIL, SENHA) 
            VALUES($nome,$email,STR_TO_DATE($idade,'%d/%m/%Y'),MD5($senha));
        ";
        mysqli_execute_query($conexao,$query);
    }