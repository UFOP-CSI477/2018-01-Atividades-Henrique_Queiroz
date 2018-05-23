<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Principal</title>
	<link rel="stylesheet" href="./css/bootstrap.css">

</head>
<body style="background-color: #CEF6F5">
	<?php
		session_start();
	?>
	<h1 align="center">Sistema de Análises Laboratoriais</h1>

	<center>
		<br><a href="router.php?op=1"><button type="button" name="AGeral" class="btn btn-info" style="width: 30%">Área Geral</button></a>
		<a href="router.php?op=2"><button type="button" name="APaciente" class="btn btn-info" style="width: 30%">Área do Paciente</button></a>
		<a href="router.php?op=4"><button type="button" name="AAdministrativa" class="btn btn-info" style="width: 30%">Área Administrativa</button></a>
	</center>
	
	<br>
	<br>
	<br>
	<img src="./WallpaperLab.jpg" width="100%" height="300p"></img>

</body>
</html>