<!doctype html>
	<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
			<title>Carbono 0 | Início </title>
			<link rel="stylesheet" type="text/css" href="restrita.css">
			<link rel="shortcut" icon href="icone.fw.png" />
		</head>			

		<body>
			<a href="index.php"><div id="logo"><i><img src="logo_carbonozero.png" width="185px" height="185px"></i></div></a>
				
			<?php
				$nome = $_REQUEST['nome1'];
				$email = $_REQUEST['mail'];
				$assunto = $_REQUEST['assunto'];
				$mensagem = $_REQUEST['mensa'];
				$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
				
				$consulta = "INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

				$resultado = mysqli_query($conexao, $consulta) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
				echo "<div id='minhavo'>Cadastro efetuado com sucesso!</div><br>";
			?>
			
			<a href="index.php"><div id="meuvo">Voltar</div></a>
		</body>
	</html>