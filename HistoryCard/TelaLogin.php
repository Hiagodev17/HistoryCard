<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TelaLogin.css">
    <title>Tela de Bloqueio</title>
</head>

<body>
<?php
if (isset($_GET['status']) && $_GET['status'] == 'sucesso') {
    echo '<div class="mensagem-sucesso"
    style="background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border: 1px solid #c3e6cb;
    margin-top: 10px;
    border-radius: 5px;
    text-align: center;"
    >Cadastro feito com sucesso!</div>';
} elseif (isset($_GET['status']) && $_GET['status'] == 'erro') {
    echo '<div class="mensagem-erro" 
    style="background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border: 1px solid #f5c6cb;
    margin-top: 10px;
    border-radius: 5px;
    text-align: center;"
    >Erro ao fazer o cadastro.</div>';
}
?>
<div class="container">
        <div id="entrada">
            <form action="verificaLogin.php" method="post" name="formLogin" id="formLogin">
            <img src="Imagens/logo4.png" width="200px" height="150px">
            <h3>E-mail</h3>
            <div class="Login">
                <img class="icon" src="Imagens/user.png" alt="">
                <input type="text" id="usuario" class="login-input" name="email" required>
            </div>
            <h3>Senha</h3>
            <div class="Login">
                <img class="icon" src="Imagens/senha.png">
                <input type="password" id="senha" class="login-input" name="senha" required>
            </div>
            <button class="botao" type="submit"><strong>LOGIN</strong></button>
            <div>
                <h4>Caso não possua cadastro, <a href="TelaCadastro.php">CLIQUE AQUI</a></h4>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
