<?php

	namespace Controller;

	use Model\Estado;

	class EstadosController{

		public function cadastrar($request){

			$estado = new Estado();
			$estado->insert($request);


		}

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