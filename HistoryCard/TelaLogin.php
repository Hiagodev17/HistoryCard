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
            <form action="" method="post">
            <img src="Imagens/logo4.png" width="200px" height="150px">
            <h3>E-mail</h3>
            <div class="Login">
                <img class="icon" src="Imagens/user.png" alt="">
                <input type="text" id="usuario" class="login-input" name="email">
            </div>
            <h3>Senha</h3>
            <div class="Login">
                <img class="icon" src="Imagens/senha.png">
                <input type="password" id="senha" class="login-input" name="senha">
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
<?php
include('TelaInicial.php');

if(isset($_POST['email'] || isset($_POST['senha']))){
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
} else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
} else{
    
}
?>