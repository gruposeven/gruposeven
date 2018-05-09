<html>
	<head>
		<title>Grupo Seven Brasil</title>
		<meta charset="UTF-8">
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">		
<!--Icone-->
		<link rel="shortcut icon" type="text/css" href="imagens/sistema.ico">
<!--Bibliotecas-->
		<link rel="stylesheet" type="text/css" href="biblioteca/normalize.css">
		<script type="text/javascript" src="biblioteca/jquery-3.2.1.min.js"></script>
<!--Estilo-->
		<link rel="stylesheet" type="text/css" href="css/style-v1-1.css">
<!--javascript-->
		<script type="text/javascript" src="script/script-v1-1.js"></script>
		<script type="text/javascript" src="script/verificador-v1-1.js"></script>
<!--Corpo-->
		<body>
			<div id = "body_autenticacao" class="body_autenticacao">
				<div class="body_autenticacao_inicio">
						<img src="imagens/logog7.png">
				</div>
				<div class="body_autenticacao_meio">
					<form id="autenticacao_form" method="POST" onsubmit="return validarAutenticacao()">
						<input type="text" name="usuario" id="autenticacaoUsuario"class="autenticacao_campo"  maxlength="11" placeholder="Usuário" 
							onfocus="focoUsuario()" autocomplete="off"><br>
						<input type="password" name="senha" id="autenticacaoSenha"class="autenticacao_campo" placeholder="Senha" maxlength="6"
							onfocus="focoSenha()" autocomplete="off"><br>
						<input type="submit" class="autenticacao_submit" value="Entrar">
					</form>
					<form id="novoCadastro_form" method="POST" onsubmit="return validarCadastro()">
						<input onfocus="focoNomePF()"id="cadastroNomePF" type="text" name="nome_pf" class="autenticacao_campo" placeholder="Nome" autocomplete="off"><br>
						<input onfocus="focoSobrenomePF()"id="cadastroSobrenomePF" type="text" name="sobrenome_pf" class="autenticacao_campo" placeholder="Sobrenome" autocomplete="off"><br>
						<input onfocus="focoEmail()"id="cadastroEmailPF" type="email" name="email_pf" class="autenticacao_campo" placeholder="E-mail" autocomplete="off"><br>
						<input onfocus="focoCadastroCPF()" id="cadastroUsuario" type="text" name="NovoUsuario" class="autenticacao_campo" maxlength="11" placeholder="CPF" autocomplete="off"><br>
						<input onfocus="focoCadastroSenha()"id="cadastroSenha" type="password" name="senha" class="autenticacao_campo" placeholder="Senha" maxlength="6"autocomplete="off"><br>
						<input type="submit" id="submit_cadastro" class="autenticacao_submit" value="Cadastro">
					</form>
					<form id="esqueciSenha_form" method="POST" onsubmit="return validarEsqueci()">
						<input onfocus="focoUsuario()" type="text" name="usuario" id="esqueciUsuario" class="autenticacao_campo" placeholder="CPF"  maxlength="11" autocomplete="off"><br>
						<input onfocus="mensagemEmail()"type="email" name="email" id="esqueciEmail"class="autenticacao_campo" placeholder="E-mail"><br>
						<input onfocus="focoNascimento()"type="date" name="nascimento" id="esqueciNascimento"class="autenticacao_campo" placeholder="Data de Nascimento" autocomplete="off"><br>
						<input type="submit" id="submit_esqueci" class="autenticacao_submit" value="Nova Senha">
					</form>
				</div>
				<div class="body_autenticacao_fim">
					<div class="body_autenticacao_fim_direito">
						<img src="imagens/assistente1.png">
					</div>
					<div id="assistente"class= "body_autenticacao_fim_esquerdo">
						<h4> Sistema Grupo Seven Brasil</h4>
						Serei sua assistente virtual e irei te auxiliar em que precisar... 
					</div>
				</div>
			</div>
			<div class="body_opcoes">
				<button id="body_opcoes_novo" onclick="AcessarNovoCadastro()" class="body_opcoes_novo">Cadastre-se
				</button>
				<button id="body_opcoes_autenticacao" onclick="AcessarAutenticacao()" class="body_opcoes_autenticacao">Autenticação
				</button>
				<button id="body_opcoes_esqueci" onclick="AcessarEsqueciSenha()"class="body_opcoes_esqueci">Esqueci Senha
				</button>
			</div>			
		</body>
	</head>
</html>