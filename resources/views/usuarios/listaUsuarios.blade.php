@extends('usuarios.areaAdministrador')

@section('conteudo')

<h2 class="jumbotron text-center">Lista de Procedimentos</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>E-amil</th>
        <th>Tipo</th>
    </tr>

    @foreach($usuarios as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->type }}</td>
        </tr>
    @endforeach

</table>

@endsection('conteudo')