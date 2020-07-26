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
					<form action='inserirdb.php' method='post'>
						<tr>
							<td>
								Árvores Plantadas:  
							</td>
							
							<td>
								<input type="number" name="arvores" id="arvores">
							</td>
						</tr>
						
						<tr>
							<td>
								Locais Cedidos:  
							</td>
							
							<td>
								<input type="number" name="local" id="local">
							</td>
						</tr>
						
						<tr>
							<td>
								Capital Arrecadado:  
							</td>
							
							<td>
								<input type="number" name="capital" id="capital">
							</td>
						</tr>
						
						<tr>
							 <td>
								<input type='submit' value='Inserir'>
							 </td>
						</tr>
					</form>
				</table>
			</div>
		</body>
	</html>