@extends('usuarios.areaAdministrador')

@section('conteudo')

    <h2 class="jumbotron text-center">Inserir Procedimento</h2>

    <center>

      <form class="form-inline" method="post" action="{{ route('procedimentos.store') }}">

        @csrf

        <label>Nome: </label>
        <input class="form-control" type="text" name="name"><br>

        <label>Preço: </label>
        <input class="form-control" type="text" name="price"><br>

        <label>Seu ID: </label>
        <input class="form-control" type="text" name="user_id"><br><br>

        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

      </form>

    </center>

@endsection