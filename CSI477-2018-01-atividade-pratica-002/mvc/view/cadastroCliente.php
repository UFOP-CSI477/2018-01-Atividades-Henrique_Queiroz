<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faça seu cadastro!</title>
	<link rel="stylesheet" href="../../mvc/css/bootstrap.css">
	<script>
		
		function validarNome(texto){
			if(texto.value.length==0){
				alert("É necessário digitar o seu nome completo!");
				document.getElementById("msgNome").innerHTML="<font color='red'>Por favor, insira seu nome completo!</font>";
			}else{
				document.getElementById("msgNome").innerHTML="<font color='green'>Tudo certo por aqui!</font>";
				
			}
		}

		function validarSenha(senha1, senha2){
				if(senha1.value.length > 0 && senha1.value == senha2.value){
					document.getElementById("msgSenha").innerHTML="<font color = 'green'>Senha válida!</font>";
				}else{
					document.getElementById("msgSenha").innerHTML="<font color = 'red'>Senha inválida</font>";
					alert("Senhas não correspondem ou incorretas.");
				}
		}


	</script>
</head>
<body style="background-color: #CEF6F5">
	<form name="dadosUsuario" method="post" action="../router.php?op=3">
		<center>
			<h1 class="jumbotron">Insira seus dados:</h1>
			<table>
				
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td align="right"><label>Nome completo:</label> </td>
					<td><input type="text" name="nome" onblur="validarNome(dadosUsuario.nome)"></td>
				</tr>
				<tr>
					<td colspan="2"><div id="msgNome" ></div></td>
				</tr>
				<tr>
					<td align="right"><label>Senha:</label></td>
					<td><input type="password" name="senha"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><div id="msgSenha"></div></td>
				</tr>
				<tr>
					<td align="right"><label>Confirmação de Senha:</label></td>
					<td><input type="password" name="confSenha" id="txtConfSenha" onblur="validarSenha(dadosUsuario.senha, dadosUsuario.confSenha)"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><div id="msgConfSenha"></div></td>
					<td></td>
				</tr>
				<tr>
					<td align="right"><label>E-mail:</label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><div id="msgEmail"></div></td>
				</tr>

			</table>
		
				
		<br>
		<br>
		<button type="submit" class="btn btn-primary">Cadastrar!</button>
	</center>

	</form>
	
</body>
</html>