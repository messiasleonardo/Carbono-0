<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
			<title>Carbono 0 | Início </title>
			<link rel="stylesheet" type="text/css" href="estilo1.css">
			<link rel="shortcut" icon href="icone.fw.png" />
		</head>

		<body>
			<?php 
			
				$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
				$consulta = "SELECT nome FROM cliente where id like '14'";
				$resultado = mysqli_query($conexao, $consulta);
				while(list($nome) = mysqli_fetch_row($resultado)) { 
			?>
			
			<div id="home"></div>

			<div id="header">
				<a href="#home"><div id="logo"><i><img src="logo_carbonozero.png" width="185px" height="185px"></i></div></a>

				<div id="social">
					<ul>
						<li><a href="https://www.facebook.com/" target="_blank"><img src="face.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://www.instagram.com/?hl=pt-br" target="_blank"><img src="insta.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://twitter.com/?lang=pt-br" target="_blank"><img src="twitter.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://www.youtube.com/" target="_blank"><img src="youtube.png" width="40px" height="40px" alt=""/></a></li> 
					</ul>
				</div>
				
				<div id="menu">
					<ul>
						<li><a href="#home">Seja Bem Vindo(a), <?php echo $nome; ?> </a></li>
						<li><a href="alterar.php">Configurações</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				
				<?php	
					}
				?>
			</div>
			<div id="banner1"></div>
		</body>
	</html>