<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inserir Aluno</title>
</head>
<body>
	<h1 align="center">Insira os dados do aluno:</h1>

	<form method="post" action="router.php?op=7">

		<center>

			<label>Nome: </label>
			<input type="text" name="nome" required>
			<br>
			<br>
			<label>Rua: </label>
			<input type="text" name="rua" required>

			<label>Numero: </label>
			<input type="text" name="numero" required>
			<br>
			<br>
			<label>Bairro: </label>
			<input type="text" name="bairro" required>
			<br>
			<br>
			<label>CEP: </label>
			<input type="text" name="cep" required>
			<br>
			<br>
			<select name="idCidade" required>
				<option value="">Selecione:</option>

				<?php 

	  	  			use Model\Cidade;

			  	  	$cidade = new Cidade();
			  	  	$lista = $cidade->all();
			  	  	//var_dump($lista);
				foreach( $lista as $linha ): ?>

					<option value=" <?= $linha['id'] ?> "> <?= $linha['nome'] ?></option>


				<?php endforeach ?>	

			</select>
			<br>
			<br>
			<label>E-mail:</label>
			<input type="text" name="email" >
			<br>
			<br>
			<input type="submit" name="enviar" value="Cadastrar">

		</center>
		


	</form>

</body>
</html>