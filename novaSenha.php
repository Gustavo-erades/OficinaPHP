<!DOCTYPE html>
<?php 
    $chave=$_GET["chave"];
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./scripts/script.js" defer></script>
    <link rel="shortcut icon" href="./imagens/estacio-logo.png" type="image/x-icon">
    <title>Recuperar senha</title>
    <style>
        h1{
            font-size: 1.3em;
            padding: 8px 5px;
            color:blue;
        }
    </style>
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
                <div>
                    <h3>Sua chave é:</h3>
                    <input type="text" value="<?=$chave?>" id="input" readonly>
                    <button id="execCopy">
                        copiar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('execCopy').addEventListener('click', execCopy);
        function execCopy() {
            document.querySelector("#input").select();
            document.execCommand("copy");
        }
    </script>
</body>
</html>