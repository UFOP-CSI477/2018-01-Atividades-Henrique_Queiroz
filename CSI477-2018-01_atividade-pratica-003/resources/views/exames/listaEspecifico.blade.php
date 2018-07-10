<!DOCTYPE html>
<html>
<head>
    <title>Lista de Exames</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
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
</body>
</html>