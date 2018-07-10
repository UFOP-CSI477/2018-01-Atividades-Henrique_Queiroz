@extends('usuarios.areaAdministrador')

@section('conteudo')

<h2 class="jumbotron text-center">Cadastro de Administrador</h2>

<center>
    <form class="form-inline" action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <label>Nome: </label>
        <input class="form-control" type="text" name="name" required><br>

        <label>E-mail: </label>
        <input class="form-control" type="text" name="email" required><br>

        <label>Senha: </label>
        <input class="form-control" type="password" name="password" required><br><br>

        <input type="hidden" name="type" value="1">

        <input  class="btn btn-info" type="submit" name="cadastrar" value="Cadastrar">
    </form>
</center>

@endsection('conteudo')