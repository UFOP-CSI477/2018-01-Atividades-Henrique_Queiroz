<?php

	namespace Controller;
	include './model/Cliente.php';
	use Model\Cliente;

	class ClienteController{

		public function abrirLogin(){
			include './view/loginCliente.php';
		}

		public function inserirCliente($request){ //$request é o $_POST do formulário de cadastro, repassado

			$nome = $request['nome'];
			$email = $request['email'];
			$senha = $request['senha'];

			$cliente = new Cliente();
			$cliente->setNome($nome);
			$cliente->setEmail($email);
			$cliente->setSenha($senha);
			$cliente->save();

			session_start();
			
			$_SESSION['nome'] = $nome;
			$_SESSION['tipo'] = 3;
			//direcionar para a página do cliente
			$this->areaCliente();

		}

		public function inserirTeste($values){
			$client = new Cliente();
			$client->insertTest($values);
		}

		public function areaCliente(){
			$url = '../mvc/router.php?op=5';
				echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
		}

		public function apagarTeste($id){
			$client = new Cliente();
			$client->deleteTest($id);
		}

		public function alterarCliente($dados){
				$client = new Cliente();
				$client->updateClient($dados);
		}

		public function apagarCliente($dados){
			$client = new Cliente();
			$client->deleteClient($dados);
		}
	}

?>