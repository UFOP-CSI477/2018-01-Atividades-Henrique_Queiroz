<?php

	namespace Controller;
	include '../mvc/model/Procedure.php';
	use Model\Procedure;

	class ProcedureController{

			public function listAll(){
				$procedure = new Procedure();
				$lista = $procedure->all();
				include './view/aGeral.php';
			}

			public function updatePrice($dados){
				$price = $dados['preco'];
				$id = $dados['id'];

				$procedure = new Procedure();
				$procedure->alterProcedure($price, $id);
				
			}
	}

?>