<?php
	class persona{
		//atributos
		public $nombre = "pedro";

		//medodos
		public function hablar ($mensaje){
			echo $mensaje;
		}
	}
	$persona = new Persona();
	//echo $persona->nombre;
	$persona->hablar("hola")
	?>