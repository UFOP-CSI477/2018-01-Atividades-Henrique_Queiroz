<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="color: #c2c2f0" style="background-color: #ffccff">
	<div align="right">
		<a href="/"><button type="button" class="btn btn-warning">Sair</button></a>
	</div>

	<h1 class="jumbotron text-center">Área Administrativa</h1>
	
	<center>
		
		
		<a href="/cadastraAdm"><button type="button" class="btn btn-info">Cadastra Administrador</button></a>
		<a href="{{ route('procedimentos.create') }}"><button type="button" class="btn btn-info">Cadastrar Procedimento</button></a>
		<br><br>
		<a href="/listaEdita"><button type="button" class="btn btn-info">Atualizar Procedimento</button></a>
		
		<a href="/listaExclui"><button type="button" class="btn btn-info">Excluir Procedimento</button></a>

		<a href="/listaUsuarios"><button type="button" class="btn btn-info">Listar Usuários</button></a>

		<a href="/listaExames"><button type="button" class="btn btn-info">Listar Exames</button></a>
		<a href="/listaProcedimentos"><button type="button" class="btn btn-info">Listar Procedimento</button></a>
	</center>

	<!--CONTEÚDO-->
	


</body>
</html>