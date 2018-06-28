//Assistente de Informação Autenticação - com intervalo de 2 segundos
	function focoUsuario(){
		var timeUsuario = window.setTimeout(mensagemUsuario, 1000);
	}
	function mensagemUsuario(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#5882FA';

		var mensagemUsuario ="<h4>Campo Usuário</h4>Informe os 11 números de seu CPF.<br>Somente números, sem caracteres especiais";
		document.getElementById('assistente').innerHTML = mensagemUsuario;
	}

	function focoSenha(){
		var timeSenha = window.setTimeout(mensagemSenha, 1000);
	}
	function mensagemSenha(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#FE2E2E';

		var mensagemSenha ="<h4>Campo Senha</h4>Informe neste campo os 6 dígitos de sua senha.<br> As senhas são criptografadas.";
		document.getElementById('assistente').innerHTML = mensagemSenha;
	}

	function focoNomePF(){
		var timeUsuario = window.setTimeout(mensagemNomePF, 1000);
	}
	function mensagemNomePF(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#5882FA';

		var mensagemNomePF ="<h4>Campo Nome</h4>Informe seu nome e, se houver, seu segundo nome. Ex: João Pedro";
		document.getElementById('assistente').innerHTML = mensagemNomePF;
	}
	function focoSobrenomePF(){
		var timeUsuario = window.setTimeout(mensagemSobrenomePF, 1000);
	}
	function mensagemSobrenomePF(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#FE2E2E';

		var mensagemSobrenomePF ="<h4>Campo Sobrenome</h4>Informe seu sobrenome completo.<br> Ex: Ferreira de Oliveira";
		document.getElementById('assistente').innerHTML = mensagemSobrenomePF;
	}
	function focoEmail(){
		var timeUsuario = window.setTimeout(mensagemEmail, 1000);
	}
	function mensagemEmail(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#5882FA';

		var mensagemEmail ="<h4>Campo E-mail</h4>Informe seu E-mail completo.<br>";
		document.getElementById('assistente').innerHTML = mensagemEmail;
	}

	function focoCadastroSenha(){
		var timeUsuario = window.setTimeout(mensagemCadastroSenha, 1000);
	}
	function mensagemCadastroSenha(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#5882FA';

		var mensagemCadastroSenha ="<h4>Campo Senha</h4>Cadastre sua senha de 06 dígitos<br> Evite inserir caracteres especiais";
		document.getElementById('assistente').innerHTML = mensagemCadastroSenha;
	}

	function focoCadastroCPF(){
		var timeUsuario = window.setTimeout(mensagemCadastroCPF, 1000);
	}
	function mensagemCadastroCPF(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#FE2E2E';

		var mensagemCadastroCPF ="<h4>Campo CPF</h4> Cadastre os 11 dígitos de seu CPF. Inclua somente números sem caracteres especiais Ex: 99999999999";
		document.getElementById('assistente').innerHTML = mensagemCadastroCPF;
	}
	function focoNascimento(){
		var timeUsuario = window.setTimeout(mensagemNascimento, 1000);
	}
	function mensagemNascimento(){
		document.getElementById('assistente').style.color = 'white';
		document.getElementById('assistente').style.backgroundColor = '#FE2E2E';

		var mensagemNascimento ="<h4>Data de Nascimento</h4> Informe sua data de nascimento <br>Ex: dia/mês/ano";
		document.getElementById('assistente').innerHTML = mensagemNascimento;
	}

//transição entre formularios 
function AcessarNovoCadastro(){
	document.getElementById('autenticacao_form').style.display = 'none';
	document.getElementById('novoCadastro_form').style.display = 'flex';
	document.getElementById('esqueciSenha_form').style.display = 'none';

	
	document.getElementById('body_opcoes_novo').style.display = 'none';
	document.getElementById('body_opcoes_autenticacao').style.display = 'block';
	document.getElementById('body_opcoes_esqueci').style.display = 'block';


	var mensagemSenha ="<h4>Cadastro Novo Usuário</h4>De inicio precisamos apenas desses itens acima para criarmos o seu login e senha";
	document.getElementById('assistente').innerHTML = mensagemSenha;
	document.getElementById('body_autenticacao').style.height = '550px';
}

function AcessarEsqueciSenha(){
	document.getElementById('autenticacao_form').style.display = 'none';
	document.getElementById('novoCadastro_form').style.display = 'none';
	document.getElementById('esqueciSenha_form').style.display = 'flex';

	document.getElementById('body_opcoes_novo').style.display = 'block';
	document.getElementById('body_opcoes_autenticacao').style.display = 'block';
	document.getElementById('body_opcoes_esqueci').style.display = 'none';

	var mensagemSenha ="<h4>Esqueceu sua senha?</h4>Informe os dados acima e aguarde sua nova senha por e-mail";
	document.getElementById('assistente').innerHTML = mensagemSenha;
	document.getElementById('body_autenticacao').style.height = '450px';

}

function AcessarAutenticacao(){
	window.location.href=window.location.href	
}

