<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área Operador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="background-color: #ffccff">


	<h1 class="jumbotron text-center">Área do Operador</h2>

	<h3 class="text-center">Lista de Procedimentos</h3>
	
	<table class="table table-striped">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>ID do Usuário</th>
			<th>Preço</th>
			<th>Editar</th>
		</tr>

		@foreach($procedimentos as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->user_id }}</td>
			<td>{{ $p->price }}</td>
			<td><form action="{{ url('/editaPreco') }}" method="post">
					@csrf
					<input type="hidden" name="id" value="{{ $p->id }}">
					<input type="submit" name="ok" value="Editar">
			    </form></td>
		</tr>
		@endforeach

	</table>
		<div align="center">
		<a href="/" ><button type="button" >Sair</button></a>
	</div>

</body>
</html>