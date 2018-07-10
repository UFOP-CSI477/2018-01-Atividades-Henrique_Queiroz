@extends('usuarios.areaAdministrador')

@section('conteudo')

<h2 class="jumbotron text-center">Lista de Procedimentos</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>ID do Usuário</th>
    </tr>

    @foreach($procedimentos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->user_id }}</td>
        </tr>
    @endforeach

</table>

@endsection('conteudo')