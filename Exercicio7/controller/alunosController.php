<?php

	namespace Controller;

	use Model\Aluno;

	class AlunosController{

		public function listarAll(){

			$aluno = new Aluno();
			$lista = $aluno->all();

			foreach($lista as $linha){
				echo $linha;
				?><br><?php
			}
		}

	}

?>