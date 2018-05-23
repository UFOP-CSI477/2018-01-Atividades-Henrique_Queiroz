<?php

	namespace Controller;
	include './model/User.php';
	use Model\User;

	class UserController{

			public function validarLogin(){

				$user = new User();
				$user->checkLogin();

			}

		public function inserirCliente($request){ //$request é o $_POST do formulário de cadastro, repassado

			$nome = $request['nome'];
			$email = $request['email'];
			$senha = $request['senha'];
			$tipo = $request['tipo'];

			$user = new User();
			$user->setNome($nome);
			$user->setEmail($email);
			$user->setSenha($senha);
			$user->setType($tipo);
			$user->save();

		}
	}

?>