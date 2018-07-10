<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Paciente</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<h2 class="jumbotron text-center">Cadastro de Paciente</h2>

	<center>
		<form class="form-inline" action="<?php echo e(route('usuarios.store')); ?>" method="post">
			<?php echo csrf_field(); ?>
			<label>Nome: </label>
			<input class="form-control" type="text" name="name" required><br>

			<label>E-mail: </label>
			<input class="form-control" type="text" name="email" required><br>

			<label>Senha: </label>
			<input class="form-control" type="password" name="password" required><br><br>

			<input type="hidden" name="type" value="3">

			<input class="btn btn-info" type="submit" name="cadastrar" value="Cadastrar"><br><br>

			<a href="/"><button type="button" class="btn btn-info">Voltar</button></a>
		</form>
	</center>

</body>
</html>