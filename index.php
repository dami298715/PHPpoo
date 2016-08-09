
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



// usando los métodos constructores y destructores.

   class Loteria 
   {
      // atributos
      public $numero;
      public $intentos;
      public $total_intentos;
      public $resultado = false;

      // metodos
      public function __construct($numero, $intentos)
      {
         $this->numero = $numero;
         $this->intentos = $intentos;
      }

      public function sortear()
      {
         $minimo = $this->numero / 2;
         $maximo = $this->numero * 2;
         for ($i=0; $i < $this->intentos; $i++) { 
            if($this->resultado){
               break;  
            }
            $int = rand($minimo, $maximo);
            self::intentos($int, $i);
         }
      }

      public function intentos($int, $ciclo)
      {
         if($int == $this->numero){
            echo "<strong>". $int ." == ". $this->numero ."</strong><br>";
            $this->total_intentos = $ciclo; // el numero de iteraciones del bucle será la cantidad de intentos
            $this->resultado = true;
         }
         else
         {
            echo $int ." != ". $this->numero . "<br>";
         }
      }

      public function __destruct(){
         if($this->resultado){
            echo "¡Felicidades!, has acertado en ". ($this->total_intentos + 1) . " intentos";
         }
         else
         {
            echo "¡Rayos!, has perdido en ". $this->intentos . " intentos";
         }
      }
   }

   $loteria = new Loteria(10,5);
   $loteria->sortear();﻿


?>