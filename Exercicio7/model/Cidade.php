<?php
	
	namespace Model;

	use Model\Database;

	class Cidade{


		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}


		public function all(){
			$sql = 'SELECT nome FROM cidades';

			return $this->db->query($sql);
		}
	}

?>