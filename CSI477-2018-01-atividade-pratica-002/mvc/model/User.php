<?php

	namespace Model;
	use PDO;
	use Model\Database;
	use DateTime;
	/**
	* 
	*/
	class User{

		protected $db = null;
		private $nome;
		private $email;
		private $senha;
		private $data;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
			$dt = new DateTime();
      		$this->data = $dt->format('Y-m-d H:i:s');
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function setData(){
			$this->data = $data;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function save(){
			$sql = "INSERT INTO users (name, email, password, type, created_at) VALUES ('" . $this->nome ."','" . $this->email. "','" . $this->senha. "', '". $this->type ."','" . $this->data. "')";
			$this->db->query($sql);

			echo "Usuário cadastrado";
		}
		
		public function checkLogin(){
			
			$email = $_SESSION['email'];
			$senha = $_SESSION['senha'];

			$db = null;
			$db = Database::getInstance()->getDB();

			$sql = "SELECT * FROM users WHERE email = '". $email ."' AND password = '". $senha . "' ";
			$result = $db->query($sql);
			$rows = $result->fetchAll(PDO::FETCH_ASSOC);

			if( !empty($rows)){
				foreach($rows as $output){
					$_SESSION['nome'] = $output['name'];
					$_SESSION['tipo'] = $output['type'];
					$_SESSION['id'] = $output['id'];

					if($output['type'] == 3){ // tipo paciente

						$url = '../mvc/router.php?op=5';
						echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

					}else if($output['type'] == 1){// tipo administrador

						$url = '../mvc/router.php?op=7';
						echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

					}else if($output['type'] == 2){ //tipo operador
						$url = '../mvc/router.php?op=12';
						echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
					}
				}
			} else{
				echo "Usuário não cadastrado!";
			}
		}

		public function getAll(){

			$db = null;
			$db = Database::getInstance()->getDB();

			$sql = "SELECT * FROM users WHERE type = 3"; //selecionar apenas os pacientes
			$result = 	$db->query($sql);
			$rows = $result->fetchAll(PDO::FETCH_ASSOC);

			if( !empty($rows)){
				return $rows;
			}else{
				echo "Não há pacientes para exibir";
			}
		}
	}


?>