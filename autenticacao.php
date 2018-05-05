<html>
	<head>
		<title>Sistema Grupo Seven</title>
		<meta charset="UTF-8">
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="style-v-1-0.css">
		<link rel="stylesheet" type="text/css" href="biblioteca/normalize.css">
		<link rel="shortcut icon" type="text/css" href="imagens/sistema.ico">
		<script type="text/javascript" src="script/script.js"></script>
		<script type="text/javascript" src="biblioteca/jquery-3.2.1.min.js"></script>

		<body>
			<div class="divfundo">
				<div class="divlogo">
						<img class="logo" src="imagens/logog7.png">
				</div>
				<div class"divbox">
					<form method="POST" action="autenticacao.php">

						Usuário:<br>
						<input type="text" required placeholder="Informe seu CPF" maxlength="11" autofocus autocomplete ="on"><br><br>
						Senha:<br>
					 	<input type="password" required placeholder="Código de 6 digitos" maxlength="6" autofocus autocomplete ="off"><br><br>
						<input type="submit" class="botao" value="Entrar">
						<a href="esqueci.php"> Esqueci a senha </a>

					</form>
				</div>
				</div>
				<div class="error">
					Erro na autenticação - Tente novamente 
				</div>	
			
			<div class="rodape">
					<h4>@Grupo Seven Brasil<br>Todos os direitos reservados</h4>	
					Brasília: (61) 3045-1945 / São Paulo (11) 3214-3302 
				</div>	
		</body>
	</head>

</html>