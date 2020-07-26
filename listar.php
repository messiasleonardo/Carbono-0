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
       
			<div id="lik">
				<table>
					<tr>
						<td>
							<a href="listar.php">Listar Clientes</a>
						</td>
					</tr>
				   
				   <tr>
						<td>
							<a href="listar1.php">Listar Mensagens</a>
						</td>

					</tr>

					<tr>
						<td>
							<a href="listar2.php">Listar Estatísticas</a>
						</td>
					</tr>
					
					<tr>
						<td>
							<a href="inserir.php">Inserir Estatística</a>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="lik2">
				<table>
					<tr>
						<td>
							Código do Cliente
						</td>
							
						<td> | </td>
							
						<td>
							Nome do Cliente 
						</td>
							
						<td> | </td>
							
						<td>
							Email
						</td>
							
						<td> | </td>
							
						<td>
							Senha
						</td>
					</tr>
					
					<?php 
						$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
						$consulta = "select * from cliente";
						$resultado = mysqli_query($conexao, $consulta);
						while(list($id, $nome, $email, $senha) = 
						mysqli_fetch_row($resultado)) { 
					?>
					
					<tr>
						<td>
							<?php echo $id; ?> 
						</td>
							
						<td> | </td>
							
						<td>
							<?php echo $nome; ?>
						</td>
							
						<td> | </td>
							
							
						<td>
							<?php echo $email; ?>
						</td>
							
						<td> | </td>
							
						<td>
							<?php echo $senha; ?>
						</td>
							
						<td> | </td>
						
						<td width=50>
							<a href='excluir.php?codigo=<?php echo $id; ?>'>Excluir</a><br>
						</td>
					</tr>
					
					<?php	
						}
					?>
				</table>
			</div>
		</body>
	</html>