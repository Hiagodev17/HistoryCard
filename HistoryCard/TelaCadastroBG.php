
<?php
//require 'TelaInicial.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $hostname = "127.0.0.1";
			$user = "root";
			$password = "";
			$database = "historycard";
		
			$conexao = new mysqli($hostname,$user,$password,$database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres epsciais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);
				$senha = $conexao -> real_escape_string($_POST['senha']);
				$email = $conexao -> real_escape_string($_POST['email']);


				$sql = "INSERT INTO `usuarios`
							(`nome`, `email`, `senha`)
						VALUES
							('".$nome."', '".$email."', '".$senha."');";

				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: TelaLogin.php?status=sucesso', true, 301);
			}
        }
		?>
