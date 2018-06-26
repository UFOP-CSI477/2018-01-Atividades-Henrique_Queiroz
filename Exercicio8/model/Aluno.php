<?php
	
	namespace Model;

	use Model\Database;

	class Aluno{


		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}


		public function all(){
			$sql = 'SELECT nome FROM alunos';

			return $this->db->query($sql);
		}

		public function insert($novo){
			$sql = "INSERT INTO alunos (nome, rua, numero, bairro, cidade_id, cep, mail) VALUES ('". $novo['nome'] ."','". $novo['rua'] ."','". $novo['numero'] ."',
			'". $novo['idCidade'] ."','". $novo['cep'] ."','". $novo['email'] ."')";

			$this->db->query($sql);
		}
	}

?>