<?php

	namespace Model;
	include './model/Database.php';
	use Model\Database;

	class Procedure{
		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function all(){
			$sql = "SELECT * FROM procedures ORDER BY name";
			return $this->db->query($sql);
		}

		public function allIndividual($id){
			$sql = "SELECT T.date, P.name, T.id FROM procedures as P, tests as T WHERE T.user_id = '". $id ."' AND P.id = T.procedure_id  ORDER BY T.created_at";
			//$sql2 = "SELECT * FROM procedures as P INNER JOIN tests as T ON P.id = T.procedure_id AND T.user_id = :id ";
			return $this->db->query($sql);
		}

		public function alterProcedure($newPrice, $id){
			$sql = "UPDATE procedures SET price = '". $newPrice ."' WHERE id = '". $id ."' ";

			$this->db->query($sql);
			echo "Preço alterado com sucesso!";
			session_start();
			include './view/areaOperador.php';
		}
	}

?>
