<?php require_once('api_mt_include2.php'); ?>
<?php require_once('cargarClientes.php'); ?>
<?php require_once('gestionarSalidas.php'); ?>
<?php require_once('ConfigMk.php'); ?>
<?php require_once('ApiMk.php'); ?>
<?php

error_reporting(0);

function ValidChar($c){ //filtro metacaracteres
	if (preg_match("/^([0-9a-zA-Z\*]){1,36}$/", $c)){
		return true;
	}else{
		return false;
	}
}

$ac="";
if(ValidChar($_GET["ac"])==1){
	$ac=$_GET["ac"];
}

$archivoCortados='./Salida Datos/cortados.txt';
$archivoDebug='./Salida Datos/clientesDebug.txt';
$archivoMenos150='./Salida Datos/clientesMenos150';

$ApiMk =new ApiMk ();

	
	switch($ac){
		case "cortar":
		
			echo "Archivo a utilizar de entrada: 01-17L50";
			
			$cargarClientes = New CargarClientes ();
			$cargarClientes->cargarClientes();
			
			destruirArchivoSalida($archivoCortados);
			destruirArchivoSalida($archivoDebug);
			destruirArchivoSalida($archivoMenos150);
		
			foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
				if ($clienteMoroso->idApiUser > -1) {
					if($clienteMoroso->deuda > 150){
						$cortado="cortado".$clienteMoroso->perfil;
						
					$ApiMk->cambiarPerfilUserAndRemove($clienteMoroso->idApiUser, $clienteMoroso->idApiActive, $cortado);
					
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoCortados, $linea);
					}
				}
			
					
			}
			
		
				foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
					if ($clienteMoroso->idApiUser < 0){
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoDebug, $linea);
					}
		
				}
			foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
					if ($clienteMoroso->deuda < 151){
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoMenos150, $linea);
					
					}
			}
			echo "El corte fue procesado con exito!.<br/>";
			echo "Archivos de Salida:.<br/>";
			echo "cortados--------- clientes cortados con exito.<br/>";
			echo "clientesDebug---- clientes NO cortados por diferencia entre hospot comment y exel.<br/>";
			echo "clientesMenos150---- clientes NO por deber menos de 150$.<br/>";
			
			unset ($cargarClientes);
			
			break;
			
			case "avisoPago":
			
			
			echo "Archivo a utilizar de entrada: 01-17L50";

			$cargarClientes = New CargarClientes ();
			$cargarClientes->cargarClientes();
			
			destruirArchivoSalida($archivoCortados);
			destruirArchivoSalida($archivoDebug);
			destruirArchivoSalida($archivoMenos150);
			
			
		
			
			foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
				
				if ($clienteMoroso->idApiUser > -1) {
					echo $clienteMoroso->perfil ." ";
					
					
						if ( !(strpos($clienteMoroso->perfil, 'cortado') !==false) AND !(strpos($clienteMoroso->perfil, 'noPago') !==false )) {
					
					$noPago="noPago".$clienteMoroso->perfil;
				
					echo "entra al if";
					$ApiMk->cambiarPerfilUserAndRemove($clienteMoroso->idApiUser, $clienteMoroso->idApiActive, $noPago);
					
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoCortados, $linea);
					}
					}
				}	
			
			
				foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
					if ($clienteMoroso->idApiUser < 0){
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoDebug, $linea);
					}
		
				}
			foreach($cargarClientes->clientesMorososStorage as $clienteMoroso){
					if ($clienteMoroso->deuda < 151){
					$linea=$clienteMoroso->ip." ".$clienteMoroso->nombreApellido." ".$clienteMoroso->deuda;
					grabarEnArchivo($archivoMenos150, $linea);
					
					}
			}
			echo "El corte fue procesado con exito!.<br/>";
			echo "Archivos de Salida:.<br/>";
			echo "cortados--------- clientes cortados con exito.<br/>";
			echo "clientesDebug---- clientes NO cortados por diferencia entre hospot comment y exel.<br/>";
			echo "clientesMenos150---- clientes NO por deber menos de 150$.<br/>";
			
		unset ($cargarClientes);
			
			break;
			case "restablecer":
			break;
			
		default:
			echo "Ups! hubo un error!.";
	
}

?>