<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <title>Oficina PHP+MySql</title>
</head>
<body>
    <div class="container">
        <div id="div_formulario" class="flex-box">
            <div id="div_grid">
                <form action="pegarDados.php" method="post" id="formulario">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Example: Fulano D. Tal" required onkeyup="corBorda()">
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Example:email@gmail.com">
                    </div>
                    <div>
                        <label for="idade">Data de nascimento:</label>
                        <input type="date" id="idade" name="idade" required>
                    </div>
                    <div>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="Sua senha" required>
                    </div>
                    <button type="submit" name="enviar" id="enviar">
                        Cadastrar
                    </button>
                </form>
                <div id="texto">
                    <img src="./imagens/estacio-logo.png" alt="logo da estácio" width="200px">
                    <h2>Fazer Cadastro</h2>
                    <h4>Faça seu cadastro para acessar a plataforma</h4>
                    <h3>PHP+MySQL</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>