@extends('layout.principal')

@section('conteudo')

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ação</th>
		</tr>

		@foreach( $usuarios as $u )

		<tr>
			<td>{{ $u->id }}</td>
			<td>{{ $u->name }}</td>
			<td>{{ $u->email }}</td>
			<td><a href="/usuarios/{{ $u->id }}">Exibir</a></td>
		</tr>	

		@endforeach

	</table>

@endsection('conteudo')