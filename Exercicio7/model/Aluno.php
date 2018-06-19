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
	}

?>