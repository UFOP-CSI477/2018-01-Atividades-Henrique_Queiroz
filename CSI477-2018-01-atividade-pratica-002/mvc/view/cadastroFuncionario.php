<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar novo funcionário.</title>

</head>
<body style="background-color: #CEF6F5">
	<form name="dadosUsuario" method="post" action="../mvc/router.php?op=16">
		<center>
			<h1 class="jumbotron">Dados do funcionário:</h1>
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
					<tr>
					<td align="right"><label>Tipo de usuário: (1 - Administrador| 2 - Operador) </label></td>
					<td><input type="range" min="1" max="2" name="tipo"  ></td>
				</tr>

			</table>
		
				
		<br>
		<br>
		<button type="submit" class="btn btn-primary">Cadastrar!</button>
	</center>

	</form>
	
</body>
</html>