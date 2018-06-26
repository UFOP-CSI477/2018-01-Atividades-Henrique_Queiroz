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
	
	}else if($op == 3){ //Listar Cidades
		$cidadesController = new CidadesController();
		$cidadesController->listarAll();

	}else if($op == 4){ // VIEW Inserir Alunos
		include 'view/inserirAluno.php';

	} else if($op == 5){ //View Inserir Estados
		include 'view/inserirEstado.php';

	} else if($op == 6){ //View Inserir Cidade
		include 'view/inserirCidade.php';
	
	}else if($op == 7){ //cadastrar Aluno
		$alunosController = new AlunosController();
		$alunosController->cadastrar($_POST);

	}else if($op == 8){ //Cadastrar Estado
		$estadosController = new EstadosController();
		$estadosController->cadastrar($_POST);

	} else if($op == 9){ //Cadastrar Cidade
		$cidadesController = new CidadesController();
		$CidadesController->cadastrar($_POST);

	}

?>