<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro de Exames</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

    <h3 class="jumbotron text-center">Cadastrar Novo Exame</h3>

    <center>

      <form method="post" action="{{ route('exames.store') }}">

        @csrf

        <label>Digite seu ID: </label>
        <input type="text" name="user_id" required><br>

        <label>Data: </label>
        <input type="date" name="date" required=""><br>
        Selecione o Procedimento:
        <!-- <input type="text" name="estado_id"> <br> //-->
        <select name="procedure_id" required>
          <option value="">Selecione:</option>
          <!-- Dados dos estados //-->
          @foreach($procedimentos as $p)
          <option value="{{ $p->id }}">Nome: {{ $p->name }} | Preço: {{ $p->price }}</option>
          @endforeach
        </select>

        <br><br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">
        <a href="/areaPaciente"><button class="btn btn-warning">Cancelar</button></a>

      </form>

    </center>

</body>
</html>