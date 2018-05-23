<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Apresentação de Serviços</title>
	<link rel="stylesheet" href="./mvc/css/bootstrap.css">
</head>
<body style="background-color: #CEF6F5">
	<h1 class="jumbotron" align="center">Conheça nossos serviços:</h1>
<center>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Procedimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>

  	  <?php 
  	  	use Model\Procedure;
  	  	
  	  	$procedure = new Procedure();
  	  	$lista = $procedure->all();
  	   foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['price'] ?></td>
      </tr>
    <?php endforeach ?>
    
  </tbody>
</table>
<br>
<br>
<a href="./index.php">Retornar</a>
</center>

</body>
</html>