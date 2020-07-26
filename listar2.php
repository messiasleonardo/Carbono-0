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
							Árvores Plantadas 
						</td>
							
						<td> | </td>
							
						<td>
							Locais Cedidos
						</td>
							
						<td> | </td>
							
						<td>
							Capital Arrecadado
						</td>
					</tr>
					
					<?php 
						$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
						$consulta = "select * from estatistica";
						$resultado = mysqli_query($conexao, $consulta);
						while(list($id, $arvore, $local, $capital) = mysqli_fetch_row($resultado)) { 
					?>
					
					<tr>
						<td>
							<?php echo $arvore; ?>
						</td>
							
						<td> | </td>
							
						<td>
							<?php echo $local; ?>
						</td>
							
						<td> | </td>
							
						<td>
							R$ <?php echo $capital; ?>
						</td>

						<td width=50>
							<a href='alterar.php?codigo=<?php echo $id; ?>'>Alterar</a><br>
						</td>
						
						<td> | </td>
						
						<td width=50>
							<a href='excluir2.php?codigo=<?php echo $id; ?>'>Excluir</a><br>
						</td>
					</tr>
					
					<?php	
						}
					?>
				</table>
			</div>
		</body>
	</html>