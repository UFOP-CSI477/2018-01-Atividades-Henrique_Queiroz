<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área de Administrador</title>
	<link rel="stylesheet" href="../mvc/css/bootstrap.css">
</head>
<body style="background-color: #CEF6F5">
	
		<h1 class="jumbotron text-center">Seja bem vindo, <?php echo $_SESSION['nome'] ?>!</h1>
		<center>
			<label>Você está logado como Administrador!</label>
		</center>
		
		
			

		
		<table>
			<th></th>
			<th></th>

			<tr>
				<td>
					<h2>Lista de Pacientes Cadastrados</h2>
					<div class="col-md-6">

				    <table class="table-bordered">

				      <tr>
				        <th>ID</th>
				        <th>Nome</th>
				        <th>E-mail</th>
				        <th>Tipo</th>
				        <th>Token</th>
				        <th>Cadastrado em</th>
				        <th>Atualizado em</th>
				      </tr>

				      <?php
				      //include '../mvc/model/User.php';
				      use Model\User;

				      $user = new User();
				      $lista = $user->getAll();

				       foreach( $lista as $linha ): ?>
				      <tr>
				        <td><?= $linha['id'] ?></td>
				        <td><?= $linha['name'] ?></td>
				        <td><?= $linha['email'] ?></td>
				        <td><?= $linha['type'] ?></td>
				        <td><?= $linha['remember_token'] ?></td>
				        <td><?= $linha['created_at'] ?></td>
				        <td><?= $linha['updated_at'] ?></td>
				      </tr>
				    <?php endforeach ?>

				  </table>
				  </div>
				</td>
				<td></td>
				<td>
					<div class="col-md-4 col-offset-2">
						
					
					<table>
						<th></th>

						<tr align="center">
							<form method="post" action="router.php?op=10" id="formlogin" name="formlogin" >
							  <fieldset id="fie">
							  <label>Insira o número ID do paciente a ser alterado/excluído</label><br />
							  <label>ID : </label>
							  <input type="text" name="id"   required />
							  <input class="btn btn-primary" type="submit" value="Proceder"  />
							  </fieldset>
							 </form>
						</tr>
						<tr></tr>
						<tr align="center">
							<br>
							<br>
							<form method="post" action="router.php?op=12">
								<label>Consultar e alterar procedimentos</label>
								<input class="btn btn-primary" type="submit" value="Consultar">

							</form>
							
						</tr>

						<tr align="center">
							<br>
							<br>
							<form method="post" action="router.php?op=15">
								<label>Cadastrar novo funcionário:</label>
								<input class="btn btn-primary" type="submit" value="Cadastrar">

							</form>
							
						</tr>
					</table>
					 
					</div>
				</td>

			</tr>

			<tr>
				
				<td colspan="2">
					

				</td>

			</tr>
	
</body>
</html>