<?php
Class Cliente
    {
        public $ip;
		public $macAddress;
		public $nombreApellido;
		public $deuda;
		public $idApiUser;
		public $idApiActive;
		public $perfil;
        
		public function __construct($ip,$nombreApellido, $deuda)
  {
  	$this->ip =$ip;
	$this->nombreApellido=  $nombreApellido;
	$this->deuda = $deuda;
	$this->idApi=-1;
	$this->perfil=-1;
  }
		public function imprimirDatosCliente()
  {
		echo $this->ip ; echo " " ; echo $this->nombreApellido;  
		echo " "; echo $this->deuda; echo " "; echo $this->idApi. "<br />";
		  }
		}
		
?>