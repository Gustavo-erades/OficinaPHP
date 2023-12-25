<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <link rel="shortcut icon" href="./imagens/estacio-logo.png" type="image/x-icon">
    <title>Recuperar senha</title>
</head>
<body>
    <div class="container">
       
        <div id="div_formulario" class="flex-box">
            <div id="div_grid">
                <div id="texto">
                    <img src="./imagens/danger.png" alt="logo da estácio" width="100px">
                    <h2>Recuperar senha</h2>
                    <h4>Um email será enviado com a chave de acesso</h4>
                </div>
                <form action="" method="post" id="formulario">
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Exemplo:email@gmail.com" required onkeyup="corBorda2()">
                    </div>
                    <button type="submit" name="enviar" id="enviar" class="botao_login">
                        Enviar chave
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>