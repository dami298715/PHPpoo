
<?php
/* ***********************metodos y atritutos
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
*/

//********************metodos constructores
/*
el metodo _construct y el metodo destructos son un par 
de metodos magicos de php.
--Constructor: al instanciar la calse el metodo se 
ejecuta al comienzo de manera automarica. debe ser publico
y no debe recordar nada.
--Destructor: _destruct este metodo se ejecuta de 
menera automatica al final de la clase. debe ser publico
y no debe recordar nada.

*/


/**
 * Video 4 Codigo Facilito
 */
 class Loteria
 {
  //Atributos
  public $numero;
  public $intentos;
  public $resulado = false;
  
  //Metodos
  public function __construct($numero, $intentos){
   $this->numero=$numero;
   $this->intentos=$intentos;
  }

  public function sortear(){
   $minimo = $this->numero / 2;
   $maximo = $this->numero * 2;
   for ($i=0; $i < $this->intentos ; $i++) { 
    $int= rand($minimo, $maximo);
    self::Intentos($int);
   }
  }

  public function Intentos($int){
   global $ganado;
   if ($int==$this->numero) {
    echo "<b>".$int." == ".$this->numero." </b><br>";
    $this->resulado=true;
    $ganado=$ganado+1;
   }else{
    echo $int." != ".$this->numero."<br>";
    
   }
  }

  public function __destruct(){
   global $ganado;
   if ($this->resulado) {
    echo "Felicidades! has ganado en ". $ganado ." intentos";
   }else {
    echo "Que pena! has perdido en tus ". $this->intentos. " intentos";
   }
  }
 }

 $loteria=new Loteria(10,10);
 $loteria->sortear();
?>﻿