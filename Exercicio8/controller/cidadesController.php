<?php

	namespace Controller;

	use Model\Cidade;

	class CidadesController{

		public function cadastrar($request){
			
			$cidade = new Cidade();
			$cidade->insert($request);

		}

		public function listarAll(){

			$cidade = new Cidade();
			$lista = $cidade->all();

			foreach($lista as $linha){
				echo $linha;
				?><br><?php
			}
		}

	}

?>