<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/TelaCadastro.css">
    <title>Tela de Bloqueio</title>
</head>

<body>
    <br><br><br>
    <div id="entrada">
        <img src="Imagens/logo2.png" width="200px" height="150px">
        <br><br><br>
        <h3>Nome</h3>
        <div class="Cadastro">
            <img class="icon" src="/Imagens/nome.png" alt="">
            <input type="text" id="nome" class="cadastro-input">
        </div>
        <br><br>
        <h3>Usuário</h3>
        <div class="Cadastro">
            <img class="icon" src="/Imagens/user.png" alt="">
            <input type="text" id="usuario" class="cadastro-input">
        </div>
        <br><br>
        <h3>Senha</h3>
        <div class="Cadastro">
            <img class="icon" src="/Imagens/senha.png">
            <input type="password" id="senha" class="cadastro-input">
        </div>
        <br><br>
        <a href="/php/TelaInicial.php">
            <button class="botao"><strong>CADASTRAR</strong></button>
        </a>
        <br><br>
        <div>
            <h4>Caso já possua cadastro, <a href="/php/TelaLogin.php">CLIQUE AQUI</a></h4>
        </div>
        <br>
    </div>
</body>

</html>