<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alteração de dados de Cliente!</title>
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


	</script>
</head>
<body style="background-color: #CEF6F5">
	
	<form name="dadosUsuario" method="post" action="../mvc/router.php?op=11">
		<center>
			<h1 class="jumbotron">Alteração de Dados do cliente:</h1>
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
					<td align="right"><label>E-mail:</label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><div id="msgEmail"></div></td>
				</tr>				

				<tr>
					<td align="right"><label>ID:</label></td>
					<td><input type="text" name="id" value="<?= $_SESSION['id_paciente'] ?>"></td>
				</tr>

			</table>
		
				
		<br>
		<br>
		
		<button type="submit" class="btn btn-primary">Alterar</button>

		<form method="post" action="router.php?op=14">
			<button type="submit" class="btn btn-primary">Excluir Registro</button>
		</form>
	</center>

	</form>
	
</body>
</html>