<?php
	
	namespace Model;

	use Model\Database;

	class Estado{


		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function insert($request){
			$nome = $request['nome'];
			$sigla = $request['sigla'];

			$sql = "INSERT INTO estados (nome, sigla) VALUES ('". $nome ."','". $sigla ."')";

			$this->db->query($sql);

		}


		public function all(){
			$sql = 'SELECT nome FROM estados';

			return $this->db->query($sql);
		}
	}

?>