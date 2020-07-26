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
				$codigo = $_REQUEST['codigo'];
				$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
			
				$consulta = "DELETE FROM cliente WHERE id='$codigo'";
				$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a exclusão dos dados.");
				echo "<div id='minhavo'>O Cliente foi excluído com êxito!</div>"; 
			?>
			
			<a href="listar.php"><div id="meuvo">Voltar</div> </a>
		</body>
	</html>