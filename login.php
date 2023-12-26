<!DOCTYPE html>
<?php
    $msg=null;
    if(isset($_GET["erro"])){
        $msg="<p id='msgErro'>Usuário inexistente no sistema! E-mail ou senha incorretos.</p>";
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <link rel="shortcut icon" href="./imagens/estacio-logo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <div class="container">
       
        <div id="div_formulario" class="flex-box">
            <div id="div_grid">
                <form action="./cadastro/validarLogin.php" method="post" id="formulario">
                <div id="erro">
                    <?= $msg ?>
                </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Exemplo:email@gmail.com" required onkeyup="corBorda2()">
                    </div>
                    <div>
                        <label for="senha" id="senha_login">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="Sua senha" required onkeyup="corBorda4()">
                    </div>
                    <button type="submit" name="enviar" id="enviar" class="botao_login">
                        Login
                    </button>
                    <div>
                        <a href="index.php">
                            Não possui um login? Faça seu cadastro aqui.
                        </a>
                    </div>
                </form>
                <div id="texto">
                    <img src="./imagens/estacio-logo.png" alt="logo da estácio" width="100px">
                    <h2>Fazer Login</h2>
                    <h4>Entre com seu email e senha</h4>
                    <h3>PHP+MySQL</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>