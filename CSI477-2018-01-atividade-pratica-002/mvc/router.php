<?php

include '../mvc/controller/procedureController.php';
use Controller\ProcedureController;

include '../mvc/controller/clienteController.php';
use Controller\ClienteController;

include '../mvc/controller/funcionarioController.php';
use Controller\FuncionarioController;

include '../mvc/controller/userController.php';
use Controller\UserController;



	$op = $_GET['op'];
	
	if($op == 1){ //Exibir a área geral

		$prController =  new ProcedureController();
		$prController->listAll();
	
	}else if($op == 2){//exigir login ou cadastro de cliente 
		$clController = new ClienteController();
		$clController->abrirLogin();

	}else if($op == 3){//efetuar o cadastro no banco de Clientes
		$clController = new ClienteController();
		$clController->inserirCliente($_POST);

	}else if($op == 4){//exigir login de funcionario 
		$funController = new FuncionarioController();
		$funController->abrirLogin();
	
	} else if($op == 5){ //direcionar para a area do paciente
		session_start();
		if($_SESSION['tipo'] == 3){
				include './view/areaPaciente.php';
		}else{
			echo "Acesso não autorizado! Tente logar!";
		}

	} else if($op == 6){ //tratamento de login

			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['senha'] = $_POST['senha'];
			$usController = new UserController();
			$usController->validarLogin();
	
	} else if($op == 7){ //direcionar para a area do administrador

		session_start();
		if($_SESSION['tipo'] == 1){
			include './view/areaAdministrador.php';
		}else{
			echo "Acesso não autorizado! Tente logar!";
		}
	}else if($op == 8){ //inserir novo teste
		session_start();
		$_POST['user_id'] = $_SESSION['id'];
		$clController = new ClienteController();
		$clController->inserirTeste($_POST);

	}else if($op == 9){//apagar teste

		$id = $_POST['id'];
		$clController = new ClienteController();
		$clController->apagarTeste($id);

	}else if($op == 10){ //abrir pagina atualizar dados do cliente
		$_SESSION['id_paciente'] = $_POST['id'];
		include './view/alteracaoCliente.php';

	}else if($op == 11){ // atualizar dados do cliente

		//$_POST['id_paciente'] = $_SESSION['id_paciente'];
		$clController = new ClienteController();
		//$_POST['id_paciente'] =  $_SESSION['id_paciente'];
		$clController->alterarCliente($_POST);

	} else if($op == 12){ //direcionar para a area do operador
		session_start();
		include './view/areaOperador.php';

	} else if($op == 13){ //updateProcedure
		$procedureController =  new ProcedureController();
		$procedureController->updatePrice($_POST);

	} else if($op == 14){ //excluir paciente
		$clController = new ClienteController();
		$clController->apagarCliente($_POST);
	
	} else if($op == 15) {// abrir tela cadastrar novo funcionario
			include './view/cadastroFuncionario.php';
	
	} else if($op == 16){//cadastrar funcionario
		$usController = new UserController();
		$usController->inserirCliente($_POST);
	}


?>