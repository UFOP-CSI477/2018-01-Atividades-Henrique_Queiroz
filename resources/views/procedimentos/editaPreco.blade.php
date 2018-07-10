<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Procedimento</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

  <h2 class="jumbotron text-center">Editar Procedimento</h2>

    <center>

      <form class="form-inline" method="post" action="{{ route('atualizaPreco') }}">

        @csrf
        <label>Nome: {{ $procedimento->name }}</label><br>
        
        <label>ID do Usuário: {{ $procedimento->user_id }}</label><br>

        <input type="hidden" name="id" value="{{ $procedimento->id }}">

        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="{{ $procedimento->price }}" required><br>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

      </form>

    </center>

</body>
</html>