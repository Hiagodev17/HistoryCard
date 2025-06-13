<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "historycard";

    $conexao = new mysqli($hostname, $user, $password, $database);
    if($conexao-> connect_error){
        echo "Failed to connect to MySQL: " . $conexao->connect_error;
        exit();

    } else{
        $nomeEmail = $conexao -> real_escape_string($_POST['email']);
        $senha = $conexao -> real_escape_string($_POST['senha']);   

        $sql= "SELECT `id`, `email` from `usuarios` where `email` = '".$nomeEmail."' and `senha` = '".$senha."' ";
        $resultado = $conexao -> query($sql);
        if($resultado-> num_rows != 0){
            $row = $resultado -> fetch_array();
            $_SESSION['id'] = $row[0];
            $_SESSION['nome'] = $row[1];
            $conexao -> close();
            header('Location: TelaInicial.php', true, 301);
            exit();

        } else{
            $conexao -> close();
            header('Location: TelaLogin.php', true, 301);
        }
    }




    ?>
</body>
</html>