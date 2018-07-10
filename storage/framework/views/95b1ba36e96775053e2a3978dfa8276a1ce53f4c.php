<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área Administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div align="right">
		<a href="/"><button type="button" class="btn btn-warning">Sair</button></a>
	</div>

	<h2 style="color: #000000" class="jumbotron text-center">Bem vindo, à Área de Administrador!</h2>
	
	<center>
		<a href="/listaProcedimentos"><button type="button" class="btn btn-info">Listar Procedimento</button></a>
		<a href="<?php echo e(route('procedimentos.create')); ?>"><button type="button" class="btn btn-info">Cadastrar Procedimento</button></a>
		<a href="/listaEdita"><button type="button" class="btn btn-info">Atualizar Procedimento</button></a>
		<a href="/listaExclui"><button type="button" class="btn btn-info">Excluir Procedimento</button></a>

		<a href="/cadastraAdm"><button type="button" class="btn btn-info">Cadastra Administrador</button></a>

		<a href="/listaUsuarios"><button type="button" class="btn btn-info">Listar Usuários</button></a>

		<a href="/listaExames"><button type="button" class="btn btn-info">Listar Exames</button></a>
	</center>

	<!--CONTEÚDO-->
	<?php echo $__env->yieldContent('conteudo'); ?>


</body>
</html>