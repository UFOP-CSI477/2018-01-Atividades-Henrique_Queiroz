<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<h1 class="jumbotron text-center">Área Geral</h1>

	<center>
		<form class="form-inline" action="{{ url('/login') }}" method="post">
			@csrf
			<label>E-mail: </label>
			<input class="form-control" type="text" name="email" id="email" required><br>

			<label>Senha: </label>
			<input class="form-control" type="password" name="password" required><br><br>

			<input class="btn btn-succes" type="submit" name="login" value="Login">
		</form>
		<br><br><a href="/cadastraPaciente">Não possui cadastro?</a>
	</center>

	
</body>
</html>