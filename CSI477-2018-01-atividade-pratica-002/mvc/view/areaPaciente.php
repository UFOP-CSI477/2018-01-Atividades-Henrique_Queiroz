<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Paciente</title>
	<link rel="stylesheet" href="../mvc/css/bootstrap.css">
</head>
<body style="background-color: #CEF6F5">
	<center>
		<h1>Seja bem vindo, <?php echo $_SESSION['nome'] ?>!</h1>
		<br>
		<label>Você está logado como Paciente!</label>
		<br>
		<br>
		<table>
			<tr>
				<td>
					<h2>Lista de Procedimentos Agendados:</h2>
					<center>
						

					
				    <table class="table-bordered">

				      <tr>
				        <th>Nome:</th>
				        <th>Data agendada:</th>
				        <th>Código do procedimento:</th>
				      </tr>

				      <?php
				      //include '../mvc/model/User.php';
				      
				      use Model\Procedure;

				      $procedure = new Procedure();
				      $lista = $procedure->allIndividual($_SESSION['id']);
				      	//var_dump($lista);
				       foreach( $lista as $linha ){ ?>
				      <tr>
				        <td><?= $linha['name'] ?></td>
				        <td><?= $linha['date'] ?></td>
				        <td><?= $linha['id']   ?></td>
				      </tr>
				    <?php } ?>

				  </table>
				  </center>
				</td>
				
			</tr>
		</table>
		<br>

		<table>

			<tr>
				<td>
					<label>Deseja marcar um novo procedimento?</label>

					<form name="newProcedure" method="post" action="./router.php?op=8">

					<label for="id">Procedimento:</label>
					<select name="id">
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
					<label>Data de realização:</label>
					<input type="date" name="data" required>
					<br>
						<input type="submit" class="btn btn-primary" value="Agendar">
					</form>

				</td>

				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

				<td>
					
					<label>Deseja cancelar algum procedimento?</label>

					<form name="deleteProcedure" method="post" action="./router.php?op=9">

					<label for="id">Procedimento:</label>
					<select name="id">
						<option value="">Selecione:</option>

						<?php 
						  	//use Model\Procedure;

			  	  	
				      $procedure = new Procedure();
				      $lista = $procedure->allIndividual($_SESSION['id']);

						foreach( $lista as $linha ): ?>

							<option value=" <?= $linha['id'] ?> "> <?= $linha['name'] ?></option>


						<?php endforeach ?>	

					</select>

						<input type="submit" class="btn btn-primary" value="Desmarcar">
					</form>
				</td>
			</tr>
		</table>

		<a href="http://localhost/AtvP002/mvc/">Fazer logout</a>
		
	</center>


</body>
</html>