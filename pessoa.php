<?php
	class pessoa{
		private $nome, $idade, $genero;

		// GETTRS

		public function getNome(){
			return $this->nome;
		}
		public function getIdade(){
			return $this->idade;	
		}
		public function getGenero(){
			return $this->genero;
		}

		// SETERS

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setIdade($idade){
			$this->idade = $idade;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}


		public function dormir(){
			echo "Dormindo..";
		}
		public function comer(){
			echo "Comendo..";	
		}
		public function andar(){
			echo "Andando..";
		}
	}