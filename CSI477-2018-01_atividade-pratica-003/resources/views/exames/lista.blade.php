@extends('usuarios.areaAdministrador')

@section('conteudo')

<h2 class="jumbotron text-center">Lista de Exames</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Data</th>
        <th>ID do Usuário</th>
        <th>ID do Procedimento</th>
    </tr>

    @foreach($exames as $e)
        <tr>
            <td>{{ $e->id }}</td>
            <td>{{ $e->date }}</td>
            <td>{{ $e->user_id }}</td>
            <td>{{ $e->procedure_id }}</td>
        </tr>
    @endforeach

</table>

@endsection('conteudo')