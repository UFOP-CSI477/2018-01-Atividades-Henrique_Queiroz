<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Paciente</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div align="right">
		<a href="/"><button type="button" class="btn btn-warning">Sair</button></a>
	</div>

	<h3 style="color: #000000" class="jumbotron text-center">Bem vindo à Área de Paciente!</h3>
	
	<h3 style="color: #000000" class="text-center">Selecione qual função deseja fazer em relação aos exames</h3>

	<center>
		<a href="/cadastraExame"><button type="button" class="btn btn-info">Registrar Exame</button></a><br><br>

		<form action="<?php echo e(route('listaEspecifico')); ?>" method="post">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="user_id" value="<?php echo e($e->id); ?>">
			<input class="btn btn-info" type="submit" name="ok" value="Listar Meus Exames">
		</form>
	</center>


	<?php echo $__env->yieldContent('conteudo'); ?>
</body>
</html>