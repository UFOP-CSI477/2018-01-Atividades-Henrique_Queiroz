<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área Operador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div align="right">
		<a href="/"><button type="button" class="btn btn-warning">Sair</button></a>
	</div>

	<h2 style="color: #000000" class="jumbotron text-center">Bem vindo à Área de Operador!</h2>

	<h3 class="text-center">Lista de Procedimentos</h3>
	
	<table class="table table-striped">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>ID do Usuário</th>
			<th>Preço</th>
			<th>Editar</th>
		</tr>

		<?php $__currentLoopData = $procedimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->id); ?></td>
			<td><?php echo e($p->name); ?></td>
			<td><?php echo e($p->user_id); ?></td>
			<td><?php echo e($p->price); ?></td>
			<td><form action="<?php echo e(url('/editaPreco')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="id" value="<?php echo e($p->id); ?>">
					<input type="submit" name="ok" value="Editar">
			    </form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html>