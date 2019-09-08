<?php 
 
 function grabarEnArchivo($nombreArchivo, $mensaje){
	 
    if($archivo = fopen($nombreArchivo, "a"))
    {
        fwrite($archivo, $mensaje. "\n");
        fclose($archivo);
    }
 }
 
 function destruirArchivoSalida($nombreArchivo) {
	 
  if(file_exists($nombreArchivo))
    {
        unlink($nombreArchivo);
    }
 }
 
   
 
 
 ?>