<?php

	namespace Controller;

	use Model\Estado;

	class EstadosController{

		public function listarAll(){

			$estado = new Estado();
			$lista = $estado->all();

			foreach($lista as $linha){
				echo $linha;
				?><br><?php
			}
		}

	}

?>