<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TelaLogin.css">
    <title>Tela de Bloqueio</title>
</head>

<body>
<div class="container">
        <div id="entrada">
            <img src="Imagens/logo4.png" width="200px" height="150px">
            <h3>Usuário</h3>
            <div class="Login">
                <img class="icon" src="Imagens/user.png" alt="">
                <input type="text" id="usuario" class="login-input">
            </div>
            <h3>Senha</h3>
            <div class="Login">
                <img class="icon" src="Imagens/senha.png">
                <input type="password" id="senha" class="login-input">
            </div>
            <a href="TelaInicial.php">
                <button class="botao"><strong>LOGIN</strong></button>
            </a>
            <div>
                <h4>Caso não possua cadastro, <a href="TelaCadastro.php">CLIQUE AQUI</a></h4>
            </div>
        </div>
    </div>
</body>

</html>