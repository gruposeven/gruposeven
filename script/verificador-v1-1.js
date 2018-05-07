function validar(){
	var autenticacaoUsuario = document.getElementById("autenticacaoUsuario").value;
	var autenticacaoSenha = document.getElementById("autenticacaoSenha").value;
	
	var cadastroNomePF = document.getElementById("cadastroNomePF").value;
	var cadastroSobrenomePF = document.getElementById("cadastroSobrenomePF").value;
	var cadastroEmailPF = document.getElementById("cadastroEmailPF").value;
	var cadastroUsuario = document.getElementById("cadastroUsuario").value;
	var cadastroSenha = document.getElementById("cadastroSenha").value;
	
	var esqueciUsuario = document.getElementById("esqueciUsuario").value;
	var esqueciEmail = document.getElementById("esqueciEmail").value;
	var esqueciNascimento = document.getElementById("esqueciNascimento").value;
	
//Autenticação de Usuário	
	if (autenticacaoUsuario.length <11){
		alert("Usuário informado incorretamente. Informe seu CPF de 11 números ");
		return false;
	}else{
		if (autenticacaoUsuario != parseInt(autenticacaoUsuario)){
			alert("CPF incorreto. Informe novamente seus dados");
		}else{
			if (autenticacaoSenha.length <6){
				alert("Senha informada incorretamente. Informe sua senha de 6 dígitos ");
				return false;
			}else{
			}	
		}
	}
//Cadastro de Novo Usuário	



//Esqueci a Senha
}
//fechamento da função validar

	