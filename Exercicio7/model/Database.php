<?php

	namespace Model;
	use PDO;

	class Database{
		protected $db = null;

		public static function getInstance(){
			static $instance = null;

			if($instance === null){
				return new static();
			}

			return $instance;
		}
	

		public function getDB() {

    		if ($this->db === null) {
    	  
    	  		$db = new PDO('mysql:host=localhost;dbname=exercicios', 'sistemaweb', '123456');
   			}

    		return $db;

  		}
  }

?>