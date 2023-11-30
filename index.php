<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <link rel="shortcut icon" href="./imagens/estacio-logo.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div id="div_formulario" class="flex-box">
            <div id="div_grid">
                <form action="./cadastro/pegarDados.php" method="post" id="formulario">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Example: Fulano D. Tal" required onkeyup="corBorda()">
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Example:email@gmail.com" required onkeyup="corBorda2()">
                    </div>
                    <div>
                        <label for="idade">Data de nascimento:</label>
                        <input type="date" id="idade" name="idade" required onkeyup="corBorda3()">
                    </div>
                    <div>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="Sua senha" required onkeyup="corBorda4()">
                    </div>
                    <button type="submit" name="enviar" id="enviar">
                        Cadastrar
                    </button>
                </form>
                <div id="texto">
                    <img src="./imagens/estacio-logo.png" alt="logo da estácio" width="100px" id="img_index">
                    <h2>Fazer Cadastro</h2>
                    <h4>Faça seu cadastro para acessar a plataforma</h4>
                    <h3>PHP+MySQL</h3>
                    <p id="jaTemCadastro">
                        já possui cadastro?
                        <a href="login.php">
                            Faça seu login.
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>