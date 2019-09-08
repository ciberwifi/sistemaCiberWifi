<?php require_once('Cliente.php'); ?>
<?php require_once('ApiMk.php'); ?>
<?php
  
Class CargarClientes
    {
		
		public $clientesMorososStorage; 

		
public function __construct()
  {
  	
	$this->clientesMorososStorage = new SplObjectStorage(); 
	
  }
		
public function cargarClientes(){
	
 $archDeudores = file('./Entrada Datos/01-17L50.txt');
	
foreach($archDeudores as $linea ) {
	
  $lineaDeudores = explode (",", $linea);
  
		if( count($lineaDeudores ) >= 2 ) {
			
		$nombreApellido = substr($lineaDeudores[1], 0, 9);
		$cliente = New Cliente($lineaDeudores[0], $nombreApellido, $lineaDeudores[3]);

		$this->clientesMorososStorage->attach($cliente);
			
			}
}

$this->cargarIdClientes();

}

function cargarIdClientes(){
	
	$ApiMk= new ApiMk();
	
	$USUARIOS=$ApiMk->obtenerUsers();
	$ACTIVES=$ApiMk->obtenerActives();
	

	

	foreach ($this->clientesMorososStorage as $clienteMoroso){

		foreach($USUARIOS as $key=>$usuario){
		
		$pos1 = stripos($usuario["comment"], $clienteMoroso->ip);
		$pos2 = stripos($usuario["comment"], $clienteMoroso->nombreApellido);
		
			if($pos2 !==false and $pos1 !==false){
			$clienteMoroso->idApiUser = $usuario[".id"];
			$clienteMoroso->perfil= $usuario["profile"];
			$clienteMoroso->macAddress= $usuario["name"];
		
			
				foreach($ACTIVES as $key=>$activo){
		
				$pos1 = stripos($activo["user"], $clienteMoroso->macAddress);
		
				if($pos1 !==false){
				
				$clienteMoroso->idApiActive = $activo[".id"];
					}
				}
			
			}
			
	}
		}
}

	}
	



	


	

?>