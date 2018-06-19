<?php

	namespace Controller;

	use Model\Cidade;

	class CidadesController{

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