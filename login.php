<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <title>Oficina PHP+MySql</title>
    <style>
        a{
            font-size: 0.6em;
        }
        a:hover{
            color:rgb(0, 106, 255);;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="div_formulario" class="flex-box">
            <div id="div_grid">
                <form action="./cadastro/validarLogin.php" method="post" id="formulario">
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Example:email@gmail.com" required onkeyup="corBorda2()">
                    </div>
                    <div>
                        <label for="senha">Senha:</label>
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