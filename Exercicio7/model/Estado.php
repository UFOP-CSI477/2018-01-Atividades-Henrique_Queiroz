<?php
	
	namespace Model;

	use Model\Database;

	class Estado{


		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}


		public function all(){
			$sql = 'SELECT nome FROM estados';

			return $this->db->query($sql);
		}
	}

?>