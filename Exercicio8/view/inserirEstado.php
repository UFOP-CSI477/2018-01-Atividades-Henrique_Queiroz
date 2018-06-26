<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inserir Estado</title>
</head>
<body>
	<h1 align="center">Insira os dados do Estado:</h1>

	<form method="post" action="router.php?op=8">

		<center>

			<label>Nome: </label>
			<input type="text" name="nome" required>
			<br>
			<br>
			<label>Sigla: </label>
			<input type="text" name="sigla" required>
			<br>
			<br>
			<input type="submit" name="enviar" value="Cadastrar">

		</center>
		


	</form>

</body>
</html>