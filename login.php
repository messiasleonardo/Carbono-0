<?php
	// obtém os valores digitados
	$usuario = $_REQUEST["login"];
	$senha = $_REQUEST["passworde"];

	// acesso ao banco de dados
	include "conecta_mysql.php";
	$consulta = "SELECT nome, senha FROM cliente where nome='$usuario'";
	$resultado = mysqli_query($conexao, $consulta);

	$linha = mysqli_fetch_array($resultado);

	if($linha==0) {  // testa se a consulta retornou algum registro 
		echo "<html>";
			echo "<head>";
				echo "<link rel='stylesheet' type='text/css' href='estilo1.css'>";
			echo "</head>";
			
			echo "<body>";
				echo "<div id='logo'><img src='Img/logo_carbonozero.png' width='185px' height='185px'></div>";
			echo "</body>";
			
			echo "<p align='center'>Usuário não encontrado!</p>";
			echo "<p align='center'><a href=\"index.php\">Voltar</a></p>";
		
		echo "</html>";
	}
	
	else {
		if ($senha != $linha['senha']) { // confere senha 
			//echo mysql_result($resultado, 0, "senha");	
			echo "<html>";
			echo "<head>";
				echo "<link rel='stylesheet' type='text/css' href='estilo1.css'>";
			echo "</head>";
			
			echo "<body>";
				echo "<div id='logo'><img src='Img/logo_carbonozero.png' width='185px' height='185px'></div>";
			echo "</body>";
			
			echo "<p align='center'>Senha Incorreta!</p>";
			echo "<p align='center'><a href=\"index.php\">Voltar</a></p>";
		
		echo "</html>";
		}
		
		else {  // usuário e senha corretos. Vamos criar os cookies 
			setcookie("nome_usuario", $usuario);
			setcookie("senha_usuario", $senha);
			// direciona para a página inicial dos usuários cadastrados
			header ("Location: logged.html");
		}
	}
?>

