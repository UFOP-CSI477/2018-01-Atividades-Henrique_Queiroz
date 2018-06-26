<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inserir Cidade</title>
</head>
<body>
	<h1 align="center">Insira os dados da Cidade:</h1>

	<form method="post" action="router.php?op=9">

		<center>

			<label>Nome: </label>
			<input type="text" name="nome" required>
			<br>
			<br>
			<select name="estado_id" required>
				<option value="">Selecione:</option>

				<?php 

	  	  			use Model\Estado;

			  	  	$estado = new Estado();
			  	  	$lista = $estado->all();
			  	  	//var_dump($lista);
				foreach( $lista as $linha ): ?>

					<option value=" <?= $linha['id'] ?> "> <?= $linha['nome'] ?></option>


				<?php endforeach ?>	

			</select>
			<br>
			<br>
			<input type="submit" name="enviar" value="Cadastrar">

		</center>
		


	</form>

</body>
</html>