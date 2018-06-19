<?php

	include 'controller/alunosController.php';
	include 'controller/cidadesController.php';
	include 'controller/estadosController.php';
	include 'model/Aluno.php';
	include 'model/Estado.php';
	include 'model/Cidade.php';
	include 'model/Database.php';

	use Controller\AlunosController;
	use Controller\EstadosController;
	use Controller\CidadesController;

	$op = $_GET['op'];

	iF($op == 1){ //Listar Alunos
		$alunosController = new AlunosController();
		$alunosController->listarAll();
	
	}else if($op == 2){ //Listar Estados
		$estadosController = new EstadosController();
		$estadosController->listarAll();
	
	}else if($op == 3){
		$cidadesController = new CidadesController();
		$cidadesController->listarAll();
	}

?>