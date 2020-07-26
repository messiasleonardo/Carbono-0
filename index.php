<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
			<title>Carbono 0 | Início </title>
			<link rel="stylesheet" type="text/css" href="estilo1.css">
			<link rel="shortcut icon" href="Img/logo_carbonozero.png" >
			
			<style>
				#olae {
					position:absolute;
					margin-left:5%;
					margin-top:10%;
					font-size:3em;
					width:65%;
					font-family:"The Bully_PersonalUseOnly";
					Color:#fff;
					font-weight:bolder;
				}
				
				#olae ul {
					list-style:none;
				}
				
				#olae ul li {
					padding-left:2%;
				}
			</style>
			
			<script type="text/javascript" src="site.js"></script>
			<script>
				function validarSenha(){
					NovaSenha = document.getElementById('senha').value;
					CNovaSenha = document.getElementById('nsenha').value;
			   
					if (NovaSenha != CNovaSenha) {
						alert("Senhas não correspondentes! Favor conferir"); 
					} else {
						document.form2.submit();
					}
				}
				
				$(document).ready(function() {
					function filterPath(string) {
						return string.replace(/^\//,'').replace(/(index|default).[a-zA-Z]{3,4}$/,'').replace(/\/$/,'');
					}

					$('a[href*=#]').each(function() {
						if ( filterPath(location.pathname) == filterPath(this.pathname)
                            && location.hostname == this.hostname && this.hash.replace(/#/,'') ) {
								
                            var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
                            var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;

                            if ($target) {
                                var targetOffset = $target.offset().top;
                                $(this).click(function() {
									$('html, body').animate({scrollTop: targetOffset}, 3000);
									return false;
                                });
                            }
                        }
					});
				});
			</script>
		</head>

		<body>
			<div id="home"></div>

			<div id="header">
				<a href="#home"><div id="logo"><i><img src="Img/logo_carbonozero.png" alt="" width="185px" height="185px"></i></div></a>

				<div id="social">
					<ul>
						<li><a href="https://www.facebook.com/" target="_blank"><img src="Img/face.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://www.instagram.com/?hl=pt-br" target="_blank"><img src="Img/insta.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://twitter.com/?lang=pt-br" target="_blank"><img src="Img/twitter.png" width="40px" height="40px" alt=""/></a></li>
						<li><a href="https://www.youtube.com/" target="_blank"><img src="Img/youtube.png" width="40px" height="40px" alt=""/></a></li> 
					</ul>
				</div>

				<div id="menu">
					<ul>
						<li><a href="#howit">SOBRE</a></li>
						<li><a href="#doubt">FAQ</a></li>
						<li><a href="#signin">CADASTRE-SE</a></li>
						<li><a href="#FCon">FALE CONOSCO</a></li>
						<li>
							<form name="form1" action="login.php" method="post">
								<input type="text" name="login" placeholder="   Login">
								<input type="password" name="passworde" placeholder="   Senha">
								<input type="submit" name="button" value="Go!">
							</form>
						</li>
					</ul>
				</div>
			</div>

			<div id="banner1"><img src="Img/banner1920.fw.png">			
				<?php 
					$conexao = mysqli_connect('127.0.0.1','root', '', 'carbono') or die ("A conexão não foi executada com sucesso");
					$consulta = "select id, arvore, local, capital from estatistica";
					$resultado = mysqli_query($conexao, $consulta);
					while(list($id, $arvore, $local, $capital) = mysqli_fetch_row($resultado)) { 
				?>
				
				<div id="olae">
					<ul>
						<li>
							Graças à vocês, atualmente estamos com... 
						</li>
						
						<li>
							&bull; <?php echo $arvore; ?> Árvores Plantadas  
						</li>
								
						<li>
							&bull; <?php echo $local; ?> Locais Cedidos
						</li>
							
						<li>
							&bull; R$ <?php echo $capital; ?>  de Capital Arrecadado
						</li>
					</ul>		
				</div>	
				
				<?php 
					}
				?>	
			</div>
				<div id="banner2">
					<div id="howit"></div>
					
					<h1>Sobre</h1>
					
					<div>
						<ul>
							<li id="ima1"><img  src="Img/parceirias.png" width="100" height="100" alt=""/></li>
							<li id="patrocinadores">Patrocinadores</li>
							<li id="tex1">Nam & Linearum rectarum & Circulorum descriptiones in quibus Geometria fundatur, ad Mechanicam pertinent. Has lineas describere Geometria non docet sed postulat.</li>
							<li id="ima2"><img src="Img/empresas.png" width="100" height="100" alt=""/></li>
							<li id="empresas">Empresas</li>
							<li id="tex2">Ex Mechanica postulatur horum solutio, in Geometria docetur solutorum usus. Ac gloriatur Geometria quod tam paucis principiis aliunde petitis tam multa præstet. </li>
							<li id="ima3"><img src="Img/voluntarios.png" width="100" height="100" alt=""/></li>
							<li id="vonlutario">Voluntário</li>
							<li id="tex3">Nos autem non Artibus sed Philosophiæ consulentes, deq; potentiis non manualibus sed naturalibus scribentes, ea maxime tractamus quæ ad Gravitatem</li>
						</ul>
					</div>
				</div>

			<div id="banner3">
				<div id="doubt"></div>

				<h2>Faq</h2>
				<h3 id="text">Perguntas Frequentes</h3>
				
				<div id="ima4"><i><img src="Img/oioioi1920.fw.png" width="1920" height="526" alt=""/></i></div>

                <h4 id="per1">O que é um pageview?</h4>
				<p id="resp1">É a quantidade de páginas visualizadas no seu site.</p>

                <h4 id="per2">É possível contratar sem saber a qtd. de pageviews do meu site?</h4>
				<p id="resp2">Sim, você pode contratar  a quantidade mínima de pageviews e nós ajudaremos você a determinar a quantidade de pageviews do seu site.</p>

                <h4 id="per3">Como eu encontro a quantidade de pageviews do meu site?</h4>
				<p id="resp3">O jeito mais fácil é utilizando a ferramenta gratuita de monitoramento de sites, o Google Analytics</p>

                <h4 id="per4">Por que pageviews determinam a qtd. de árvores que devem ser plantadas?</h4>
				<p id="resp4">Cada nova página que é carregada no seu site consome energia no servidor em que está hospedado, emitindo gás carbônico. Dessa forma, conseguimos ter uma estimativa da quantidade de CO² emitida pelo seu site.</p>
			</div>

			<div id="banner4">
				<div id="signin"></div>

				<h1>Cadastre-se</h1>
				<h3 id="cad">Cadastro Geral</h3>

				<form name="form2" action="inserirdb1.php" method="post">
					<li id="cad1"><input type="text" name="nome" placeholder="   Nome"></li>
					<li id="cad2"><input type="email" name="email" placeholder="   E-mail"></li>
					<li id="cad3"><input type="password" name="password" id="senha" placeholder="   senha"></li>
					<li id="cad4"><input type="password" name="Cpassword" id="nsenha" placeholder="   Confirme a Senha"></li>
					<li id="cad5"><h3>Eu sou ...</h3></li>
					<li id="cad6"><input type="checkbox" name="patrocinador"> Patrocinador</li>
					<li id="cad7"><input type="checkbox" name="empresa"> Empresa</li>
					<li id="cad8"><input type="checkbox" name="vonlutario"> Voluntário</li>
					<li id="cad9"><input id="cad10" type="button" name="botao" value="Go!" onClick="validarSenha()"></li>
				</form>
				
			</div>
			
			<div id="FaleConosco">
				<div id="FCon"></div>
			
				<h1 id="letra1">Fale Conosco</h1>
				
				<form name="form3" action="inserirdb2.php" method="post">
					<li id="textt"><input type="text" name="nome1" placeholder="   Nome"></li>
					<li id="textt1"><input type="email" name="mail" placeholder="   E-mail"></li>
					<li id="textt2"><input type="text" name="assunto" placeholder="   Assunto"></li>
					<li id="textt4">
						<textarea name="mensa" rows="10" cols="35" placeholder="   Digite a mensagem aqui!"></textarea>
					</li>
					<li id="textt3"><input type="submit" name="botao" value="Go!"></li>
				</form>
				
			</div>
			
			<div id="footer">
				<div id="logoFooter"><img src="Img/logo_carbonozero.png" alt="" width="100px" height="100px"/></div>
			</div>
			
		</body>
	</html>