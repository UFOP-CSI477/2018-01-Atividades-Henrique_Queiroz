<?php
	
	namespace Model;
	//include './model/Database.php';
	use Model\Database;
	use DateTime;

	class Cliente{
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

		public function save(){
			$sql = "INSERT INTO users (name, email, password, type, created_at) VALUES ('" . $this->nome ."','" . $this->email. "','" . $this->senha. "', 3,'" . $this->data. "')";
			$this->db->query($sql);
		}

		public function insertTest($teste){
			$date = $teste['data'];
			$procedure = $teste['id'];
			$user = $teste['user_id'];

			$sql = "INSERT INTO tests (created_at, date, procedure_id, user_id) VALUES('" . $this->data . "','" . $date ."', '". $procedure ."', '". $user ."' )";
			$this->db->query($sql);

			echo "Consulta marcada!";

			include './view/areaPaciente.php';
		}

		public function deleteTest($id){

			session_start();
			$sql = "DELETE FROM tests WHERE id = '". $id ."' ";

			$this->db->query($sql);

			echo "Consulta desmarcada com sucesso!";

			include './view/areaPaciente.php';
		}

		public function updateClient($dados){
			session_start();
			$sql = "UPDATE users SET name = '". $dados['nome'] ."', email = '". $dados['email'] ."' WHERE id = '". $dados['id'] ."' ";

			$this->db->query($sql);

			echo "Alteração realizada com sucesso!";

			include './view/areaAdministrador.php';
		}

		public function deleteClient($dados){
			//session_start();
			$id = $dados['id'];
			$sql = "DELETE FROM users WHERE id = '". $id ."' ";

			$this->db->query($sql);

			echo "Usuário excluído com sucesso!";

			include './view/areaAdministrador.php';
		}
	}

?>