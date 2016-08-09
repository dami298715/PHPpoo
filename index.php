
<?php

class Persona {
	//atributos
	public $nombre=array();
	public $apellido=array();

	//metodos
	

	public function guardar($nombre, $apellido) {
		$this->nombre[] = $nombre;
		$this->apellido[] = $apellido;
	}
	
	
	public function formato($nombre, $apellido){
		echo " nombre: ". $nombre ." apellido: ". $apellido. "<br>";

	}
	public function mostrar(){
		for ($i=0; $i < count($this->nombre); $i++) { 
			 $this->formato($this->nombre[$i], $this->apellido[$i]);
	}
}
}	

$Persona = new Persona();
$Persona->guardar("carlos", "fernandes");
$Persona->guardar("damian", "palumbo");
$Persona->mostrar();

?>
	
