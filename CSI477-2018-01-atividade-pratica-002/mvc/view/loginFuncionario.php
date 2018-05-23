<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Administrativo</title>
	<link rel="stylesheet" href="../mvc/css/bootstrap.css">
</head>
<body style="background-color: #CEF6F5">
	
	<div class="text-center" style="padding:50px 0">
	<div class="logo">Login Administrativo</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" method="post" action="../mvc/router.php?op=6">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<center>
						<div class="form-group">
						<label for="lg_username" class="sr-only">E-mail</label>
						<input type="email"  id="txtEmail" name="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Senha</label>
						<input type="password" id="lg_password" name="senha" placeholder="Senha"  required>
					</div>
				
				<button type="submit" class="login-button">Entrar</button>
			</center>	
			</div>
			</div>
			<div class="etc-login-form">
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
<img src="../mvc/medicoEnfermeiro.jpg" height="300p" width="100%">

</body>
</html>