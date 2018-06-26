<?php
	
	namespace Model;

	use Model\Database;

	class Cidade{


		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function insert($request){

			$nome = $request['nome'];
			$estado_id = $request['estado_id'];

			$sql = "INSERT INTO cidades (nome, estado_id) VALUES ('". $nome ."','". $estado_id ."')";

			$this->db->query($sql);
		}


		public function all(){
			$sql = 'SELECT nome, id FROM cidades';

			return $this->db->query($sql);
		}
	}

?>