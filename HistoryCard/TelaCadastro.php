<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TelaCadastro.css">
    <title>Tela de Bloqueio</title>
</head>

<body>
    <div class="container">
        <div id="entrada">
            <form action="telaCadastroBG.php" method="post">
            <img src="Imagens/logo2.png" width="200px" height="150px">
            <h3>Nome</h3>
            <div class="Cadastro">
                <img class="icon" src="Imagens/nome.png" alt="">
                <input type="text" id="nome" class="cadastro-input" name="nome" required>
            </div>
            <h3>E-mail</h3>
            <div class="Cadastro">
                <img class="icon" src="Imagens/user.png" alt="">
                <input type="email" id="usuario" class="cadastro-input" name="email" required>
            </div>
            <h3>Senha</h3>
            <div class="Cadastro">
                <img class="icon" src="Imagens/senha.png">
                <input type="password" id="senha" class="cadastro-input" name="senha" required>
            </div>
            <button class="botao" type="submit"><strong>CADASTRAR</strong></button>
            <div>
                <h4>Caso já possua cadastro, <a href="TelaLogin.php">CLIQUE AQUI</a></h4>
            </div>
        </form>
        </div>
    </div>
</body>

</html>
<?php

?>