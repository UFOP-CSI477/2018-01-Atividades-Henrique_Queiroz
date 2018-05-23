<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../mvc/css/bootstrap.css">
</head>
<body style="background-color: #CEF6F5">
	<center>
		<h1>Seja bem vindo, <?php echo $_SESSION['nome'] ?>!</h1>
		<br>
		<label>Você está logado como Operador!</label>

		<table>
			
			<tr>
				<td>
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
				</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

				<td>
					<label>Deseja alterar o preço de um procedimento?</label>

					<form name="updateProcedure" method="post" action="./router.php?op=13">

					<label for="id">Procedimento:</label>
					<select name="id" required>
						<option value="">Selecione:</option>

						<?php 
						  	//use Model\Procedure;

			  	  	
					  	  	$procedure = new Procedure();
					  	  	$lista = $procedure->all();

						foreach( $lista as $linha ): ?>

							<option value=" <?= $linha['id'] ?> "> <?= $linha['name'] ?></option>


						<?php endforeach ?>	

					</select>

					<br>
					<label>Novo preço:</label>
					<input type="number" name="preco" required>
					<br>
						<input type="submit" class="btn btn-primary" value="Alterar">
					</form>

				</td>
			</tr>
		</table>
		<a href="../../AtvP002/mvc/">Fazer logoff</a>
	</center>


</body>
</html>